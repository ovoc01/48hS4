create database takalo;
use takalo;

create table utilisateur(
    idutilisateur int auto_increment primary key ,
    nom varchar(50),
    prenom varchar(50),
    email varchar(100) unique ,
    motdepasse varchar(50),
    admin boolean default false
);
ALTER TABLE utilisateur engine = InnoDB;

create table categorie(
    idcategorie int auto_increment primary key ,
    nomcategorie varchar(50)
);
ALTER TABLE categorie engine = InnoDB;

create table objet(
    idobjet int auto_increment primary key ,
    idutilisateur int references utilisateur(idutilisateur),
    idcategorie int references categorie(idcategorie),
    prixestimatif double,
    titre varchar(50),
    description text
);
ALTER TABLE objet engine = InnoDB;

create table photo(
    idphoto int auto_increment primary key ,
    idobjet int references objet(idobjet),
    path varchar(200)
);
ALTER TABLE photo engine = InnoDB;

create table echange(
    idechange int auto_increment primary key not null ,
    idobjet1 int references objet(idobjet),
    idobjet2 int references objet(idobjet),
    date DATE  -- Date de la proposition
);
ALTER TABLE echange engine = InnoDB;

create table etat(
    idetat int auto_increment primary key,
    etat varchar(20)
);
ALTER TABLE etat engine = InnoDB;

create table statutechange(
    idstatutechange int auto_increment primary key ,
    idechange int references echange(idechange),
    date DATE,    -- Date de lu changement d'etat (Acceptation / Refus / Annulation)
    idetat int references etat(idetat)
);
ALTER TABLE utilisateur engine = statutechange;

-- utilisateur par defaut
insert into utilisateur(nom, prenom, email, motdepasse, admin) value ('ad','min','admin@admin.admin','admin',true);
