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
	person_role_id INT,
	PRIMARY KEY (person_id)
	-- FOREIGN KEY (person_role_id) REFERENCES roles(role_id)
);

ALTER TABLE people	
	ADD FOREIGN KEY (person_role_id) REFERENCES roles(role_id);
	
--ALTER TABLE people
	--ADD CONSTRAINT fk_people_role_id FOREIGN KEY (person_role_id) REFERENCES roles(role_id);

INSERT INTO roles
(role_id, role_name)
VALUES
(1, 'directeur'),
(2, 'cuisinier'),
(3, 'technicien'),
(4, 'gardien'),
(5, 'médecin'),
(6, 'éducateur'),
(7, 'résident')
;

INSERT INTO people
(person_id, person_lastname, person_firstname, person_birthdate, person_hiredate, person_active, person_role_id)
VALUES
(1, 'Brown', 'James', '1933-05-03', '1953-05-03', true, 1),
(2, 'Jackson', 'Mickael', '1958-08-29', '1968-08-29', true, 2),
(3, 'Presley', 'Elvis', '1935-01-08', '1955-01-08', true, 3),
(4, 'Jagger', 'Mick', '1943-07-26', '1963-07-26', true, 4),
(5, 'Picasso', 'Pablo', '1881-10-25', '1901-04-08', true, 4),
(6, 'Monet', 'Claude', '1940-11-14', '1946-12-05', true, 5),
(7, 'Cézanne', 'Paul', '1939-01-19', '1956-10-22', true, 5),
(8, 'Van Gogh', 'Vincent', '1953-03-30', '1990-07-29', true, 5),
(9, 'Pacino', 'Al', '1940-04-25', '1960-04-25', true, 6),
(10, 'De Niro', 'Robert', '1943-08-17', '1963-08-17', true, 6),
(11, 'Hayek', 'Salma', '1966-09-02', '1986-09-02', true, 6),
(12, 'Cotillard', 'Marion', '1975-02-28', '1995-02-28', true, 6)
;

-- UPDATE people SET person_lastname = 'DEVOL' WHERE person_id=1;

SELECT * FROM people
