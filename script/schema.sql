create database projet48hS4;
use projet48hS4;

CREATE TABLE user (
    idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) DEFAULT NULL,
    prenom VARCHAR(30) DEFAULT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    status INTEGER DEFAULT 10
);

CREATE TABLE genre (
    idGenre int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(15)
);


CREATE TABLE infoUtilisateur (
    idUtilisateur int REFERENCES user(idUtilisateur),
    idGenre int REFERENCES genre(idGenre),
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION
);