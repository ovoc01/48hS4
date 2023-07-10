create database projet48hS4;
use projet48hS4;

CREATE TABLE genre (
    idGenre int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(15)
);

CREATE TABLE user (
    idUtilisateur int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    dateNaissance DATE DEFAULT NULL,
    status INTEGER DEFAULT 0
);


-- Status d'utilisateur
    -- L'utilisateur ne possède pas de compte (valeur: -10)
    -- L'utilisateur possède un compte sans informations (valeur: 5)
    -- Le compte de cet utilisateur a des informations et peut accéder au site (valeur: 10)

CREATE TABLE admin(
    idAdmin int PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL 
);

CREATE TABLE infoUser(
    idInfo int PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur int REFERENCES user(idUtilisateur),
    idGenre int REFERENCES genre(idGenre),
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION,
    date DATE
);

CREATE TABLE solde(
    idSolde int PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur REFERENCES user(idUtilisateur),
    montant DOUBLE PRECISION
);

CREATE TABLE activites(
    idActivite int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(15),
    gain DOUBLE PRECISION,
    perte DOUBLE PRECISION
);

CREATE TABLE regime(
    idRegime int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(30),
    duree int,
    prix DOUBLE PRECISION,
    gain DOUBLE PRECISION,
    perte DOUBLE PRECISION
);

CREATE TABLE code(
    idCode int PRIMARY KEY AUTO_INCREMENT,
    intitule VARCHAR(10),
    montant DOUBLE PRECISION,
    status int DEFAULT 0
);

