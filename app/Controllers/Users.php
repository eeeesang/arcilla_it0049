<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Ayeza Samantha Arcilla', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'Ardon Reyes', 'role' => 'Store Manager'],
            ['username' => 'cashier01', 'full_name' => 'Krizelle Joyce Toledo', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Maria Diaz', 'role' => 'Cashier'],
            ['username' => 'inventory01', 'full_name' => 'Tobbie Arlos', 'role' => 'Inventory Staff'],
        ];

        return view('pages/main/user_accs', [
            'title' => 'User Accounts',
            'stylesheet' => 'css/main/user_accs.css',
            'users' => $users,
        ]);
    }
}
