create database projet48hS4;
\c projet48hS4;

CREATE TABLE user (
    idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) DEFAULT NULL,
    prenom VARCHAR(30) DEFAULT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    status INTEGER DEFAULT 10
);