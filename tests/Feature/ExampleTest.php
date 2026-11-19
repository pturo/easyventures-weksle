<?php

namespace Tests\Feature;

use App\Mail\WekselMail;
use App\Models\ONas;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_are_available(): void
    {
        $this->get('/')->assertOk();
        $this->get('/zloz-zapytanie')->assertOk();
        $this->get('/jak-zlozyc-wniosek')->assertOk();
        $this->get('/jak-splacic-naleznosc')->assertOk();
        $this->get('/warunki-finansowania')->assertOk();
        $this->get('/wspolpraca')->assertOk();
        $this->get('/polityka-prywatnosci')->assertOk();
    }

    public function test_admin_registration_rejects_missing_data(): void
    {
        $response = $this->from('/admin/register')->post('/admin/register', []);

        $response->assertRedirect('/admin/register');
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }

    public function test_admin_registration_rejects_different_password_confirmation(): void
    {
        $response = $this->from('/admin/register')->post('/admin/register', [
            'name' => 'Admin',
            'email' => 'unused@example.com',
            'password' => 'haslo123',
            'password_confirmation' => 'innehaslo',
        ]);

        $response->assertRedirect('/admin/register');
        $response->assertSessionHasErrors(['password']);
    }

    public function test_admin_registration_creates_user(): void
    {
        $email = 'admin-' . uniqid() . '@example.com';

        $response = $this->post('/admin/register', [
            'name' => 'Admin',
            'email' => $email,
            'password' => 'haslo123',
            'password_confirmation' => 'haslo123',
        ]);

        $response->assertRedirect('/admin/login');
        $response->assertSessionHas('message', 'Konto zostało utworzone pomyślnie.');
        $this->assertDatabaseHas('users', [
            'name' => 'Admin',
            'email' => $email,
        ]);
    }

    public function test_application_rejects_invalid_financing_request(): void
    {
        Mail::fake();

        $response = $this->from('/')->post('/zloz-zapytanie', [
            'name' => 'Jan',
            'surname' => 'Nowak',
            'email' => 'niepoprawny-adres',
            'city' => 'Warszawa',
            'zip-code' => '00-001',
            'street' => 'Testowa',
            'home-number' => 'tekst',
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHasErrors([
            'email',
            'home-number',
        ]);
        Mail::assertNothingSent();
    }

    public function test_application_sends_financing_request_email(): void
    {
        Mail::fake();

        $this->post('/zloz-zapytanie', [
            'name' => 'Jan',
            'surname' => 'Nowak',
            'email' => 'jan@example.com',
            'city' => 'Warszawa',
            'zip-code' => '00-001',
            'street' => 'Testowa',
            'home-number' => '12',
            'credit-text-2' => '5000',
            'rate-text-2' => '12',
        ]);

        Mail::assertSent(WekselMail::class, function (WekselMail $mail) {
            return $mail->hasTo('kontakt@naweksel.pl')
                && $mail->data['name'] === 'Jan'
                && $mail->data['credits'] === '5000'
                && $mail->data['rates'] === '12';
        });
    }

    public function test_admin_pages_require_authentication(): void
    {
        $this->get('/admin/dashboard')->assertRedirect('/admin/login');
        $this->get('/admin/o-nas')->assertRedirect('/admin/login');
        $this->get('/admin/nasze-atuty')->assertRedirect('/admin/login');
    }

    public function test_verified_admin_can_log_in_and_open_dashboard(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('tajnehaslo'),
        ]);

        $this->post('/admin/login', [
            'email' => 'admin@example.com',
            'password' => 'tajnehaslo',
        ])->assertRedirect('/admin/dashboard');

        $this->actingAs($user)
            ->get('/admin/dashboard')
            ->assertOk();
    }

    public function test_admin_login_rejects_invalid_credentials(): void
    {
        $response = $this->from('/admin/login')
            ->post('/admin/login', [
                'email' => 'nobody@example.com',
                'password' => 'blednehaslo',
            ]);

        $response->assertRedirect('/admin/login');
        $response->assertSessionHas('message');
    }

    public function test_admin_can_create_about_section_entry(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post('/admin/o-nas', [
                'name' => 'O naszej firmie',
                'content' => 'Opis naszej działalności.',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('o_nas', [
            'name' => 'O naszej firmie',
            'content' => 'Opis naszej działalności.',
        ]);
    }

    public function test_admin_cannot_create_about_section_with_invalid_data(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->from('/admin/o-nas/create')
            ->post('/admin/o-nas', [
                'name' => '',
                'content' => '',
            ]);

        $response->assertRedirect('/admin/o-nas/create');
        $response->assertSessionHasErrors(['name', 'content']);
    }
}
