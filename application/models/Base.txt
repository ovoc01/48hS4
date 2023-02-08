create database takalo;
use takalo;

create table utilisateur(
    idutilisateur int auto_increment primary key ,
    nom varchar(50),
    prenom varchar(50),
    email varchar(100) unique ,
    motdepasse varchar(50),
    admin boolean default false
);ALTER TABLE utilisateur engine = InnoDB;
INSERT INTO utilisateur (nom, prenom, email, motdepasse, admin)
VALUES
  ('Dupont', 'Jean', 'jean.dupont@example.com', 'motdepasse1', false),
  ('Durand', 'Marie', 'marie.durand@example.com', 'motdepasse2', false),
  ('Martin', 'Luc', 'luc.martin@example.com', 'motdepasse3', false),
  ('Petit', 'Julie', 'julie.petit@example.com', 'motdepasse4', true);


create table categorie(
    idcategorie int auto_increment primary key ,
    nomcategorie varchar(50)
);ALTER TABLE categorie engine = InnoDB;
INSERT INTO categorie (nomcategorie)
VALUES
  ('Electronique'),
  ('Vêtements'),
  ('Livres'),
  ('Jouets');




create table objet(
    idobjet int auto_increment primary key ,
    idutilisateur int references utilisateur(idutilisateur),
    idcategorie int references categorie(idcategorie),
    prixestimatif double,
    titre varchar(50),
    description text
);ALTER TABLE objet engine = InnoDB;
INSERT INTO objet (idutilisateur, idcategorie, prixestimatif, titre, description)
VALUES
  (1, 1, 199.99, 'Téléviseur', 'Téléviseur HD de 50 pouces'),
  (2, 2, 49.99, 'Veste', 'Veste en cuir noir pour hommes'),
  (3, 3, 19.99, 'Livre de cuisine', 'Livre de cuisine avec des recettes faciles et rapides'),
  (4, 4, 29.99, 'Drone', 'Drone avec caméra HD et contrôle à distance');



create table photo(
    idphoto int auto_increment primary key ,
    idobjet int references objet(idobjet),
    path varchar(200)
);
ALTER TABLE photo engine = InnoDB;
INSERT INTO photo (idobjet, path)
VALUES
  (1, '/images/television.jpg'),
  (2, '/images/jacket.jpg'),
  (3, '/images/cookbook.jpg'),
  (4, '/images/drone.jpg');



create table echange(
    idechange int auto_increment primary key not null ,
    idobjet1 int references objet(idobjet),
    idobjet2 int references objet(idobjet),
    date DATE  -- Date de la proposition
);
ALTER TABLE echange engine = InnoDB;
INSERT INTO echange (idobjet1, idobjet2, date)
VALUES
  (1, 2, '2022-12-01'),
  (3, 4, '2022-11-15'),
  (2, 3, '2022-10-25'),
  (1, 4, '2022-09-20');


create table etat(
    idetat int auto_increment primary key,
    etat varchar(20)
);
ALTER TABLE etat engine = InnoDB;
INSERT INTO etat (etat)
VALUES
  ('en attente'),
  ('confirmé'),
  ('refusé');


create table statutechange(
    idstatutechange int auto_increment primary key ,
    idechange int references echange(idechange),
    date DATE,    -- Date de lu changement d'etat (Acceptation / Refus / Annulation)
    idetat int references etat(idetat)
);
ALTER TABLE utilisateur engine = statutechange;
INSERT INTO statutechange (idechange, date, idetat)
VALUES
  (1, '2022-01-01', 1),
  (2, '2022-02-01', 2),
  (3, '2022-03-01', 3);


-- utilisateur par defaut
insert into utilisateur(nom, prenom, email, motdepasse, admin) value ('ad','min','admin@admin.admin','admin',true);