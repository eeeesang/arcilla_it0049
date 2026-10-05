<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Casley Pilueta', 'email' => 'casley.pilueta@example.com', 'phone' => '0917 123 4567'],
            ['full_name' => 'Eimerson Agcaoili', 'email' => 'eimerson.agcaoili@example.com', 'phone' => '0918 234 5678'],
            ['full_name' => 'Carl Eugenio', 'email' => 'carl.eugenio@example.com', 'phone' => '0919 345 6789'],
            ['full_name' => 'Miel Crismundo', 'email' => 'miel.crismundo@example.com', 'phone' => '0920 456 7890'],
            ['full_name' => 'Bernadette Santos', 'email' => 'bernadette.santos@example.com', 'phone' => '0921 567 8901'],
        ];

        return view('pages/main/customer_accs', [
            'title' => 'Customer Accounts',
            'stylesheet' => 'css/main/customer_accs.css',
            'customers' => $customers,
        ]);
    }
}
