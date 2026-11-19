<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
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
}
