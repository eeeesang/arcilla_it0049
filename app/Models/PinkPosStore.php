<?php

namespace App\Models;

use PDO;

abstract class PinkPosStore
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:' . WRITEPATH . 'pink_pos_tfa3.sqlite');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->initialize();
    }

    private function initialize(): void
    {
        $this->db->exec('CREATE TABLE IF NOT EXISTS customers (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            full_name TEXT NOT NULL,
            email TEXT NOT NULL,
            phone TEXT,
            created_at TEXT,
            updated_at TEXT
        )');
        $this->db->exec('CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username TEXT NOT NULL UNIQUE,
            full_name TEXT NOT NULL,
            role TEXT NOT NULL DEFAULT "Cashier",
            avatar TEXT,
            created_at TEXT,
            updated_at TEXT
        )');

        if ((int) $this->db->query('SELECT COUNT(*) FROM customers')->fetchColumn() === 0) {
            $customers = [
                ['Casley Pilueta', 'casley.pilueta@example.com', '0917 123 4567'],
                ['Eimerson Agcaoili', 'eimerson.agcaoili@example.com', '0918 234 5678'],
                ['Carl Eugenio', 'carl.eugenio@example.com', '0919 345 6789'],
                ['Miel Crismundo', 'miel.crismundo@example.com', '0920 456 7890'],
                ['Bernadette Santos', 'bernadette.santos@example.com', '0921 567 8901'],
            ];
            $statement = $this->db->prepare('INSERT INTO customers (full_name,email,phone,created_at,updated_at) VALUES (?,?,?,?,?)');
            foreach ($customers as $customer) {
                $now = date('Y-m-d H:i:s');
                $statement->execute([$customer[0], $customer[1], $customer[2], $now, $now]);
            }
        }

        if ((int) $this->db->query('SELECT COUNT(*) FROM users')->fetchColumn() === 0) {
            $users = [
                ['admin01', 'Ayeza Samantha Arcilla', 'Administrator'],
                ['manager01', 'Ardon Reyes', 'Store Manager'],
                ['cashier01', 'Krizelle Joyce Toledo', 'Cashier'],
                ['cashier02', 'Maria Diaz', 'Cashier'],
                ['inventory01', 'Tobbie Arlos', 'Inventory Staff'],
            ];
            $statement = $this->db->prepare('INSERT INTO users (username,full_name,role,avatar,created_at,updated_at) VALUES (?,?,?,?,?,?)');
            foreach ($users as $user) {
                $now = date('Y-m-d H:i:s');
                $statement->execute([$user[0], $user[1], $user[2], null, $now, $now]);
            }
        }
    }
}
