CREATE DATABASE IF NOT EXISTS pink_pos_tfa2
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE pink_pos_tfa2;

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
    ('Casley Pilueta', 'casley.pilueta@example.com', '0917 123 4567', NOW()),
    ('Eimerson Agcaoili', 'eimerson.agcaoili@example.com', '0918 234 5678', NOW()),
    ('Carl Eugenio', 'carl.eugenio@example.com', '0919 345 6789', NOW()),
    ('Miel Crismundo', 'miel.crismundo@example.com', '0920 456 7890', NOW()),
    ('Bernadette Santos', 'bernadette.santos@example.com', '0921 567 8901', NOW());

INSERT INTO users (username, full_name, role, created_at) VALUES
    ('admin01', 'Ayeza Samantha Arcilla', 'Administrator', NOW()),
    ('manager01', 'Ardon Reyes', 'Store Manager', NOW()),
    ('cashier01', 'Krizelle Joyce Toledo', 'Cashier', NOW()),
    ('cashier02', 'Maria Diaz', 'Cashier', NOW()),
    ('inventory01', 'Tobbie Arlos', 'Inventory Staff', NOW());
