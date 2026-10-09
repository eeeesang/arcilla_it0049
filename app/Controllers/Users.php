<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    private UserModel $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index(): string
    {
        return view('pages/main/user_accs', [
            'title' => 'User Accounts',
            'stylesheet' => 'css/main/user_accs.css',
            'users' => $this->users->orderBy('id')->findAll(),
        ]);
    }

    public function new(): string { return $this->formView('New User'); }

    public function create()
    {
        if (! $this->validate($this->rules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        if ($this->users->usernameExists(trim((string) $this->request->getPost('username')))) {
            return redirect()->back()->withInput()->with('errors', ['username' => 'The username is already in use.']);
        }
        $this->users->insert($this->userData());
        return redirect()->to(site_url('users'))->with('success', 'User added successfully.');
    }

    public function edit(int $id): string { return $this->formView('Edit User', $this->findUser($id)); }

    public function update(int $id)
    {
        $user = $this->findUser($id);
        if (! $this->validate($this->rules($id))) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        if ($this->users->usernameExists(trim((string) $this->request->getPost('username')), $id)) {
            return redirect()->back()->withInput()->with('errors', ['username' => 'The username is already in use.']);
        }
        $data = $this->userData();
        $avatar = $this->request->getFile('avatar');
        if ($avatar !== null && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            if (! $this->validate(['avatar' => 'uploaded[avatar]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]'])) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
            $filename = $avatar->getRandomName();
            $directory = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'avatars';
            if (! is_dir($directory)) { mkdir($directory, 0775, true); }
            service('image')->withFile($avatar->getTempName())->fit(300, 300, 'center')->save($directory . DIRECTORY_SEPARATOR . $filename, 85);
            $data['avatar'] = $filename;
        } else { $data['avatar'] = $user['avatar']; }
        $this->users->update($id, $data);
        return redirect()->to(site_url('users'))->with('success', 'User updated successfully.');
    }

    private function formView(string $title, ?array $user = null): string
    {
        return view('pages/main/user_form', ['title' => $title, 'stylesheet' => 'css/main/forms.css', 'user' => $user]);
    }

    private function rules(?int $id = null): array
    {
        return ['username' => 'required|alpha_numeric_punct|min_length[3]|max_length[50]', 'full_name' => 'required|max_length[100]', 'role' => 'permit_empty|max_length[50]'];
    }

    private function userData(): array
    {
        return ['username' => trim((string) $this->request->getPost('username')), 'full_name' => trim((string) $this->request->getPost('full_name')), 'role' => trim((string) $this->request->getPost('role')) ?: 'Cashier'];
    }

    private function findUser(int $id): array
    {
        $user = $this->users->find($id);
        if ($user === null) { throw PageNotFoundException::forPageNotFound('User not found.'); }
        return $user;
    }
}
