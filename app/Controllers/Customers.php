<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '+63 917 123 4101'],
            ['full_name' => 'John Reyes', 'email' => 'john.reyes@example.com', 'phone' => '+63 918 234 5202'],
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '+63 919 345 6303'],
            ['full_name' => 'Paolo Mendoza', 'email' => 'paolo.mendoza@example.com', 'phone' => '+63 920 456 7404'],
            ['full_name' => 'Sofia Garcia', 'email' => 'sofia.garcia@example.com', 'phone' => '+63 921 567 8505'],
            ['full_name' => 'Luis Navarro', 'email' => 'luis.navarro@example.com', 'phone' => '+63 922 678 9606'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}
