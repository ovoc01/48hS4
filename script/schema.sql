create database projet48hS4;
use projet48hS4;

CREATE TABLE user (
    idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) DEFAULT NULL,
    prenom VARCHAR(30) DEFAULT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    status INTEGER DEFAULT 5
);

-- Status 
    -- L'utilisateur ne possède pas de compte (valeur: -10)
    -- L'utilisateur possède un compte sans informations (valeur: 5)
    -- Le compte de cet utilisateur a des informations et peut accéder au site (valeur: 10)

CREATE TABLE genre (
    idGenre int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(15)
);

CREATE TABLE infoUtilisateur (
    idUtilisateur int REFERENCES user(idUtilisateur),
    idGenre int REFERENCES genre(idGenre),
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION,
    dateNaissance DATE 
);