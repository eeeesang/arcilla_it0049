<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(site_url('customers'));
        }

        return view('pages/auth/login', ['title' => 'Staff Login']);
    }

    public function attempt()
    {
        if (! $this->validate([
            'username' => 'required|max_length[50]',
            'password' => 'required|max_length[255]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = (new UserModel())->findByUsername(trim((string) $this->request->getPost('username')));
        $password = (string) $this->request->getPost('password');

        if ($user === null || ! password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }

        session()->regenerate(true);
        session()->set([
            'logged_in' => true,
            'user_id' => (int) $user['id'],
            'username' => $user['username'],
            'full_name' => $user['full_name'],
            'role' => $user['role'],
        ]);

        $destination = session()->get('redirect_after_login') ?: site_url('customers');
        session()->remove('redirect_after_login');
        return redirect()->to($destination)->with('success', 'Welcome back, ' . $user['full_name'] . '.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'))->with('success', 'You have been signed out.');
    }
}
