CREATE DATABASE IF NOT EXISTS questionnaire_projet_file_rouge;
USE questionnaire_projet_file_rouge;

-- Table pour les personnes
CREATE TABLE IF NOT EXISTS personne (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);

-- Table pour les réponses
CREATE TABLE IF NOT EXISTS reponse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    personne_id INT NOT NULL,
    reponse_1 TINYINT NOT NULL,
    reponse_2 TINYINT NOT NULL,
    reponse_3 TINYINT NOT NULL,
    reponse_4 TINYINT NOT NULL,
    reponse_5 TINYINT NOT NULL,
    reponse_6 TINYINT NOT NULL,
    reponse_7 TINYINT NOT NULL,
    reponse_8 TINYINT NOT NULL,
    reponse_9 TINYINT NOT NULL,
    reponse_10 TINYINT NOT NULL,
    FOREIGN KEY (personne_id) REFERENCES personne(id) ON DELETE CASCADE
);
