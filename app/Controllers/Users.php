<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin.jdelacruz', 'full_name' => 'Juan Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier.mramos', 'full_name' => 'Mika Ramos', 'role' => 'Cashier'],
            ['username' => 'manager.rlim', 'full_name' => 'Rafael Lim', 'role' => 'Manager'],
            ['username' => 'cashier.tflores', 'full_name' => 'Trisha Flores', 'role' => 'Cashier'],
            ['username' => 'inventory.csy', 'full_name' => 'Carlo Sy', 'role' => 'Inventory Staff'],
            ['username' => 'supervisor.agarcia', 'full_name' => 'Ana Garcia', 'role' => 'Supervisor'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
