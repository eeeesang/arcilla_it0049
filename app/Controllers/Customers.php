<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Customers extends BaseController
{
    private CustomerModel $customers;

    public function __construct()
    {
        $this->customers = new CustomerModel();
    }

    public function index(): string
    {
        return view('pages/main/customer_accs', [
            'title' => 'Customer Accounts',
            'stylesheet' => 'css/main/customer_accs.css',
            'customers' => $this->customers->orderBy('id')->findAll(),
        ]);
    }

    public function new(): string { return $this->formView('New Customer'); }

    public function create()
    {
        if (! $this->validate($this->rules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $this->customers->insert($this->customerData());
        return redirect()->to(site_url('customers'))->with('success', 'Customer added successfully.');
    }

    public function edit(int $id): string { return $this->formView('Edit Customer', $this->findCustomer($id)); }

    public function update(int $id)
    {
        $this->findCustomer($id);
        if (! $this->validate($this->rules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $this->customers->update($id, $this->customerData());
        return redirect()->to(site_url('customers'))->with('success', 'Customer updated successfully.');
    }

    private function formView(string $title, ?array $customer = null): string
    {
        return view('pages/main/customer_form', ['title' => $title, 'stylesheet' => 'css/main/forms.css', 'customer' => $customer]);
    }

    private function rules(): array
    {
        return ['full_name' => 'required|max_length[100]', 'email' => 'required|valid_email|max_length[150]', 'phone' => 'permit_empty|max_length[30]'];
    }

    private function customerData(): array
    {
        return ['full_name' => trim((string) $this->request->getPost('full_name')), 'email' => trim((string) $this->request->getPost('email')), 'phone' => trim((string) $this->request->getPost('phone'))];
    }

    private function findCustomer(int $id): array
    {
        $customer = $this->customers->find($id);
        if ($customer === null) { throw PageNotFoundException::forPageNotFound('Customer not found.'); }
        return $customer;
    }
}
