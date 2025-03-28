CREATE DATABASE IF NOT EXISTS lsr;  /* Crée la database du nom de "lsr" */

USE lsr;    /* Utilise la nouvelle database pour pouvoir la modifier */

CREATE TABLE IF NOT EXISTS adherant     /* Crée la table "adherant" avec ses valeurs */
(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    civilite ENUM('M','F') NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
