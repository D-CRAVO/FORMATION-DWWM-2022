DROP TABLE IF EXISTS residents;
DROP TABLE IF EXISTS people;
DROP TABLE IF EXISTS roles;


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
	person_role_id INT,
	PRIMARY KEY (person_id)
)
;

ALTER TABLE people	
	ADD FOREIGN KEY (person_role_id) REFERENCES roles(role_id)
;
	
CREATE TABLE residents
(
	resident_id INT,
	date_arrival TIMESTAMP NOT NULL,
	date_leave TIMESTAMP,
	doctor_id INT,
	PRIMARY KEY (resident_id)
)
;

ALTER TABLE residents
	ADD FOREIGN KEY (resident_id) REFERENCES people(person_id),
	ADD FOREIGN KEY (doctor_id) REFERENCES people(person_id)
;

-- résident doit avoir obligatoirement le role '1'
INSERT INTO roles
(
	role_id, 
	role_name
)
VALUES
(1, 'résident'),
(2, 'cuisinier'),
(3, 'technicien'),
(4, 'gardien'),
(5, 'médecin'),
(6, 'éducateur'),
(7, 'directeur')
;

INSERT INTO people
(
	person_id, 
 	person_lastname, 
	person_firstname, 
	person_birthdate, 
	person_role_id
)
VALUES
(1, 'Brown', 'James', '1933-05-03', 7),
(2, 'Jackson', 'Mickael', '1958-08-29', 2),
(3, 'Presley', 'Elvis', '1935-01-08', 3),
(4, 'Jagger', 'Mick', '1943-07-26', 4),
(5, 'Picasso', 'Pablo', '1881-10-25', 4),
(6, 'Monet', 'Claude', '1940-11-14', 5),
(7, 'Cézanne', 'Paul', '1939-01-19', 5),
(8, 'Van Gogh', 'Vincent', '1953-03-30', 5),
(9, 'Pacino', 'Al', '1940-04-25', 5),
(10, 'De Niro', 'Robert', '1943-08-17', 6),
(11, 'Hayek', 'Salma', '1966-09-02', 6),
(12, 'Cotillard', 'Marion', '1975-02-28', 6),

(13, 'Duquesnoy', 'François', '1597-01-12', 1),
(14, 'Gibbons', 'Grinling', '1648-04-04', 1),
(15, 'De Dominici', 'Maria', '1645-12-06', 1),
(16, 'Lalanne', 'Claude', '1925-11-28', 1),
(17, 'Duquesnoy', 'François', '1597-01-12', 1),
(18, 'Gibbons', 'Grinling', '1648-04-04', 1),
(19, 'De Dominici', 'Maria', '1645-12-06', 1),
(20, 'Lalanne', 'Claude', '1925-11-28', 1),
(21, 'Model', 'Lisette', '1901-11-10', 1),
(22, 'Alvarez Bravo', 'Lola', '1907-04-03', 1)
;

-- Création de résidents
INSERT INTO residents
(
	resident_id,
	date_arrival,
	date_leave,
	doctor_id
)
VALUES
(13, '2022-08-15', NULL, 1),
(14, '2022-08-15', NULL, 1),
(15, '2021-03-18', '2021_04_26', 1),
(16, '2019-04-10', '2022-09-01', 1),
(17, '2022-08-16', NULL, 2),
(18, '2022-08-17', NULL, NULL),
(19, '2022-08-17', NULL, NULL),
(20, '2022-08-20', NULL, NULL),
(21, '2022-08-20', NULL, NULL),
(22, '2022-08-20', NULL, NULL)
;

--CALL create_resident (23, 'Alvarez Bravo', 'Lola', '1907-04-03', 1, '2022-08-22');

SELECT * FROM residents
;

SELECT * 
FROM people 
INNER JOIN residents ON resident_id = person_id
;
