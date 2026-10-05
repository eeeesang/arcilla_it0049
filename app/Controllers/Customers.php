<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        return view('pages/main/customer_accs', [
            'title' => 'Customer Accounts',
            'stylesheet' => 'css/main/customer_accs.css',
            'customers' => $customerModel->findAll(),
        ]);
    }
}
