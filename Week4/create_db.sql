CREATE DATABASE IF NOT EXISTS ecommerce_system;

USE ecommerce_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price INT NOT NULL
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    product VARCHAR(100)
);

INSERT INTO admin (username, password)
VALUES ('admin', '1234');

INSERT INTO products (name, price)
VALUES 
('Laptop', 60000),
('Smartphone', 25000),
('Headphones', 3500),
('Smart Watch', 8000);
