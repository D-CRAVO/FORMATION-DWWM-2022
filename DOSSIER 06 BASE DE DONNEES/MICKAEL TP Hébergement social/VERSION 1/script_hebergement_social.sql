
DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS people;

CREATE TABLE roles
(
	role_id INT PRIMARY KEY,
	role_name VARCHAR(50) NOT NULL
);

CREATE TABLE people
(
	person_id INT,
	person_lastname VARCHAR(255) NOT NULL,
	person_firstname VARCHAR(50) NOT NULL,
	person_birthdate DATE NOT NULL,
	person_hiredate DATE NULL,
	person_active BOOL NOT NULL,
	role_id INT,
	PRIMARY KEY (person_id)
);

INSERT INTO roles
(role_id, role_name)
VALUES
(1, 'directeur'),
(2, 'gardien'),
(3, 'cuisinier'),
(4, 'technicien'),
(5, 'éducateur'),
(6, 'médecin'),
(7, 'résident');

INSERT INTO people
(person_id, person_lastname, person_firstname, person_birthdate, person_hiredate, person_active, role_id)
VALUES
(1, 'DEV', 'Mike', '1980-05-03', '2017-08-27', true, 1),
(2, 'Dubizou', 'Toto', '1963-12-17', NULL, true, 3);



SELECT * FROM people;

SELECT person_lastname, person_firstname FROM people;



