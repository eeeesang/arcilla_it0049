CREATE DATABASE IF NOT EXISTS webtech_tfa4 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE webtech_tfa4;
CREATE TABLE customers (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,full_name VARCHAR(100) NOT NULL,email VARCHAR(150) NOT NULL,phone VARCHAR(30) NULL,created_at DATETIME NULL,updated_at DATETIME NULL);
CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(50) NOT NULL UNIQUE,full_name VARCHAR(100) NOT NULL,role VARCHAR(50) NOT NULL DEFAULT 'Cashier',avatar VARCHAR(255) NULL,password VARCHAR(255) NOT NULL,created_at DATETIME NULL,updated_at DATETIME NULL);
INSERT INTO customers (full_name,email,phone) VALUES
('Casley Pilueta','casley.pilueta@example.com','0917 123 4567'),('Eimerson Agcaoili','eimerson.agcaoili@example.com','0918 234 5678'),('Carl Eugenio','carl.eugenio@example.com','0919 345 6789'),('Miel Crismundo','miel.crismundo@example.com','0920 456 7890'),('Bernadette Santos','bernadette.santos@example.com','0921 567 8901');
INSERT INTO users (username,full_name,role,password) VALUES
('admin01','Ayeza Samantha Arcilla','Administrator','$2y$10$sxeLTVkNeGIhfnsYav14geuKuEV9p3k80WTODkjfG8waSrLDjOyNC'),
('manager01','Ardon Reyes','Store Manager','$2y$10$sxeLTVkNeGIhfnsYav14geuKuEV9p3k80WTODkjfG8waSrLDjOyNC'),
('cashier01','Krizelle Joyce Toledo','Cashier','$2y$10$sxeLTVkNeGIhfnsYav14geuKuEV9p3k80WTODkjfG8waSrLDjOyNC'),
('cashier02','Maria Diaz','Cashier','$2y$10$sxeLTVkNeGIhfnsYav14geuKuEV9p3k80WTODkjfG8waSrLDjOyNC'),
('inventory01','Tobbie Arlos','Inventory Staff','$2y$10$sxeLTVkNeGIhfnsYav14geuKuEV9p3k80WTODkjfG8waSrLDjOyNC');
