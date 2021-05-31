CREATE DATABASE client_ligue;

USE client_ligue;

CREATE TABLE clients
(
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(320) NOT NULL
);