<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Ayeza Samantha Arcilla', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'Ardon Reyes', 'role' => 'Store Manager'],
            ['username' => 'cashier01', 'full_name' => 'Krizelle Joyce Toledo', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Maria Diaz', 'role' => 'Cashier'],
            ['username' => 'inventory01', 'full_name' => 'Tobbie Arlos', 'role' => 'Inventory Staff'],
        ];

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
