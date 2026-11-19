<?php

namespace Tests\Unit;

use App\Mail\WekselMail;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_weksel_mail_contains_request_data(): void
    {
        $data = [
            'name' => 'Jan',
            'surname' => 'Nowak',
            'email' => 'jan@example.com',
            'city' => 'Warszawa',
            'zip_code' => '00-001',
            'street' => 'Testowa',
            'home_number' => 12,
            'credits' => '5000',
            'rates' => '12',
        ];

        $mail = new WekselMail($data);

        $this->assertSame($data, $mail->data);
    }
}
