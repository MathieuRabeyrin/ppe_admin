CREATE DATABASE league_customers;

USE league_customers;

CREATE TABLE customers
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    lastname VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(320) NOT NULL
);