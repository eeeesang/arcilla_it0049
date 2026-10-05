<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        return view('pages/main/user_accs', [
            'title' => 'User Accounts',
            'stylesheet' => 'css/main/user_accs.css',
            'users' => $userModel->findAll(),
        ]);
    }
}
