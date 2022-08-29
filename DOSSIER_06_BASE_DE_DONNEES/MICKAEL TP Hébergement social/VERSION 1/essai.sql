
-- DROP DATABASE IF EXISTS hebergement_social2204;

-- CREATE DATABASE herbergement_social2204;

-- USE hebergement_social2204; // SQL Server ou MySQL

CREATE TABLE jobs
(
	job_id INT PRIMARY KEY,
	job_name VARCHAR(50) NOT NULL
);

CREATE TABLE people
(
	person_id INT,
	person_lastname VARCHAR(255) NOT NULL,
	person_firstname VARCHAR(50) NOT NULL,
	person_birthdate DATE NOT NULL,
	person_hiredate DATE NOT NULL,
	person_active BOOL NOT NULL,
	job_id INT,
	PRIMARY KEY (person_id)
);

INSERT INTO jobs
(job_id, job_name)
VALUES
(1, 'Concepteur'),
(2, 'Développeur'),
(3, 'Boulanger');

SELECT * FROM jobs;

INSERT INTO people
(person_id, person_lastname, person_firstname, person_birthday, person_hiredate, person_active)

/*
DDL : Langage de définition des données relationnelles
CREATE DATABASE 
CREATE TABLE
CREATE VIEW
CREATE PROCEDURE
CREATE TRIGGER

ALTER TABLE...

DROP TABLE ... (suppression)
*/