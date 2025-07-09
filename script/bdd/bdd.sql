/*
Se connecter en root windows
mysql -h localhost -u root -p

En root sous Linux
sudo mysql
*/ 

/*Voir la liste des bases de données*/
SHOW DATABASES;
/*Créer une base de données*/
CREATE DATABASE nom_bdd;
/*Supprimer une base de données*/
DROP DATABASE nom_bdd;


/*Créer un utilisateur*/
CREATE USER 'pn_livres_admin'@'localhost'IDENTIFIED BY "D7vZ}s3ni@46N%";
/*lui donner droits*/
Grant ALL PRIVILEGES ON pn_livres.* TO 'pn_livres_admin'@'localhost';

/*Création de table*/
CREATE TABLE IF NOT EXISTS user (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(24) NOT NULL UNIQUE,
    mdp VARCHAR(27) NOT NULL,
    avatar VARCHAR(255),
    mail VARCHAR(255) NOT NULL UNIQUE
)ENGINE=INNODB;

INSERT INTO user (pseudo, mdp, mail)
VALUES("azerty","motdepasse","noreply@nowhere.fr");

INSERT INTO user (pseudo, mdp, mail)
VALUES("00000","Admin","admin@nowhere.fr"),
       ("Malabar","c'est bon","Faim"),
       ("Fraise","Haribo","Fruits");
SELECT * FROM user;
SELECT pseudo, mail, avatar FROM user;
SELECT pseudo, mail FROM user WHERE pseudo = "Malabar"; 
SELECT pseudo, mail, avatar FROM user ORDER BY mail ASC;
