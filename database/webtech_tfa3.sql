CREATE DATABASE IF NOT EXISTS webtech_tfa3 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE webtech_tfa3;
CREATE TABLE customers (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,full_name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL,phone VARCHAR(30) NULL,created_at DATETIME NULL,updated_at DATETIME NULL);
CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(50) NOT NULL UNIQUE,full_name VARCHAR(100) NOT NULL,role VARCHAR(50) NOT NULL DEFAULT 'Cashier',avatar VARCHAR(255) NULL,created_at DATETIME NULL,updated_at DATETIME NULL);
INSERT INTO customers (full_name,email,phone) VALUES
('Casley Pilueta','casley.pilueta@example.com','0917 123 4567'),('Eimerson Agcaoili','eimerson.agcaoili@example.com','0918 234 5678'),('Carl Eugenio','carl.eugenio@example.com','0919 345 6789'),('Miel Crismundo','miel.crismundo@example.com','0920 456 7890'),('Bernadette Santos','bernadette.santos@example.com','0921 567 8901');
INSERT INTO users (username,full_name,role) VALUES
('admin01','Ayeza Samantha Arcilla','Administrator'),('manager01','Ardon Reyes','Store Manager'),('cashier01','Krizelle Joyce Toledo','Cashier'),('cashier02','Maria Diaz','Cashier'),('inventory01','Tobbie Arlos','Inventory Staff');
