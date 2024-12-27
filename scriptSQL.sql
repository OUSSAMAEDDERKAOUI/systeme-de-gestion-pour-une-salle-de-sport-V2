-- Création de Base de Données
CREATE DATABASE gestion_salle_fitness;

-- Utilisation de Base de Données
USE gestion_salle_fitness;





-- Création des Tables de Base de Données
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telephone VARCHAR(15),
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','membre') DEFAULT 'membre'
);


CREATE TABLE activites (
    id_activite INT AUTO_INCREMENT PRIMARY KEY,
    nom_activite VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    capacite INT,
    date_debut DATE,
    date_fin DATE,
    disponibilite BOOLEAN DEFAULT 1
);


CREATE TABLE reservations (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    id_membre INT NOT NULL,
    id_activite INT NOT NULL,
    date_reservation DATE,
    statut ENUM('Confirmé', 'Annulé') DEFAULT 'Confirmé',
    FOREIGN KEY (id_membre) REFERENCES users(id_user) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_activite) REFERENCES activites(id_activite) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT UQ_reservation UNIQUE(id_membre,date_reservation,id_activite)
);


-- Ajouts des Données aux différents Tables
INSERT INTO users(nom,prenom,email,telephone,password,role)
VALUES ('Lotfi','Ahmed','ahmed@gmail.com','0691766935','$2y$10$EG17wgpj075lKQmznQJTWexPKihp8tK5ghFqPH4UArXIiFQxlM6Ju','admin'),
       ('Rizki','Laila','laila@gmail.com','0641563200','$2y$10$EG17wgpj075lKQmznQJTWexPKihp8tK5ghFqPH4UArXIiFQxlM6Ju','membre'),
       ('Alaoui','Badr','badr@gmail.com','0702769912','$2y$10$EG17wgpj075lKQmznQJTWexPKihp8tK5ghFqPH4UArXIiFQxlM6Ju','admin'),
       ('Fikri','Imane','imane@gmail.com','0714338965','$2y$10$EG17wgpj075lKQmznQJTWexPKihp8tK5ghFqPH4UArXIiFQxlM6Ju','imane');


INSERT INTO activites(nom_activite,description,capacite,date_debut,date_fin)
VALUES 
	('Yoga', 'Le yoga combine des postures physiques, des exercices de respiration.', 20, '2024-12-06', '2024-12-08'),
	   
       
	('Musculation' , 'La musculation consiste à utiliser des poids, des haltères et des machines.', 25, '2024-12-09', '2024-12-11'),
       
       
	('Cours de Zumba','La Zumba est un cours collectif mêlant danse et fitness, rythmé par des musiques.', 15, '2024-12-12', '2024-12-13'),
       
       
	('Cycling Indoor','Également appelé spinning, cette activité se pratique sur des vélos fixes.', 18, '2024-12-14', '2024-12-16');
       

INSERT INTO reservations(id_membre, id_activite, date_reservation)
VALUES (2, 1, '2024-12-30'),
	(4, 2, '2024-12-28'),
	(2, 3, '2025-01-01'),
    (4, 4, '2025-01-03');





-- Exemples de Modification des Données

-- Exemple 1 : Modifier la disponibilité de l'activité 2
UPDATE activites
SET disponibilite = 0
WHERE id_activite = 2;


-- Exemple 2 : Modifier l'adresse e-mail et le numéro de téléphone du membre nommée 'imane'
UPDATE users
SET email = 'imane@outlook.fr', 
    telephone = '0654321987'
WHERE prenom = 'Imane';

-- Exemple 3 : Annuler toutes les Réservations effectuées par l'utilisateur de l'id = 4
UPDATE reservations
SET statut = 'Annulé'
WHERE id_membre = 4;






-- Exemples de Suppression d'une Données

-- Exemple 1 : Supprimer une réservation annulée
DELETE FROM reservations
WHERE statut = 'Annulé';

-- Exemple 2 : Supprimer une activité qui a dépassé la date actuelle
DELETE FROM Activites
WHERE date_fin < CURRENT_DATE;





-- Exemples des Requetes SELECT

-- Exemple 1 : Récupérer les activités non disponibles avec leur capacité
SELECT nom_activite, description, capacite
FROM activites
WHERE disponibilite = 0;

-- Exemple 2 : Récupérer les noms des utilisateurs qui contiennent le mot "ik"
SELECT nom
FROM Membres
WHERE nom LIKE '%me%';




-- Exemples d'utilisation de JOIN

-- Exemple 1 : Récupérer les informations des réservations avec les noms des membres
SELECT reservations.id_reservation, reservations.date_reservation, reservations.statut, users.nom, users.prenom
FROM reservations
JOIN users ON reservations.id_membre = users.id_user;

-- Exemple 2 : Récupérer les activités et le nombre de réservations pour chacune
SELECT activites.nom_activite, COUNT(reservations.id_reservation) AS nombre_reservations
FROM activites
LEFT JOIN reservations ON activites.id_activite = reservations.id_activite
GROUP BY activites.id_activite, activites.nom_activite;




-- SCRIPTS SQL DEMENDES

-- Script 1 - Combien de réservations ont été confirmées dans le système ?
SELECT COUNT(reservations.id_reservation) AS nbr_reservations_confirme
FROM reservations
WHERE reservations.statut = 'Confirmé';

-- Script 2 - Quelle est la capacité moyenne des activités proposées ?
SELECT AVG(activites.capacite) AS moy_capacite
FROM activites;

-- Script 3 - Combien de membres distincts ont effectué au moins une réservation ?
SELECT COUNT(reservations.id_membre) AS nbr_membres
FROM reservations
GROUP BY reservations.id_membre;

-- Script 4 - Quelles sont les trois activités les plus réservées ?
SELECT activites.nom_activite, COUNT(reservations.id_activite) AS nbr_reservation
FROM activites JOIN reservations ON activites.id_activite = reservations.id_activite
GROUP BY activites.nom_activite
ORDER BY nbr_reservation DESC
LIMIT 3;

-- Script 5 - Quel est le pourcentage des réservations annulées par rapport au total des réservations ?
SELECT ((SELECT COUNT(*) FROM reservations WHERE reservations.statut = 'Annulé') * 100 / (SELECT COUNT(*) FROM reservations)) AS pourcentage;
