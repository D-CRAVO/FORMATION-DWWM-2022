DROP TABLE IF EXISTS artistes;
DROP TABLE IF EXISTS arts;




CREATE TABLE arts
(
	art_id INT PRIMARY KEY,
	art_name VARCHAR(50) NOT NULL
);

CREATE TABLE artistes
(
	artiste_id INT,
	artiste_nom VARCHAR(50) NOT NULL,
	artiste_prenom VARCHAR(50) NOT NULL,
	artiste_naissance DATE NOT NULL,
	artiste_deces DATE,
	artiste_oeuvres INT NOT NULL,
	art_id INT,
	PRIMARY KEY (artiste_id)
);

ALTER TABLE artistes 
	ADD FOREIGN KEY (art_id) REFERENCES arts(art_id);

INSERT INTO arts
(art_id, art_name)
VALUES
(1, 'chanteur'),
(2, 'acteur'),
(3, 'peintre'),
(4, 'sculpteur'),
(5, 'photographe');

INSERT INTO artistes
(artiste_id, artiste_nom, artiste_prenom, artiste_naissance, artiste_deces, artiste_oeuvres, art_id)
VALUES
(1, 'Brown', 'James', '1933-05-03', '2006-12-25', 3, 1),
(2, 'Jackson', 'Mickael', '1958-08-29', '2009-06-25', 4, 1),
(3, 'Presley', 'Elvis', '1935-01-08', '1977-08-16', 3, 1),
(4, 'Jagger', 'Mick', '1943-07-26', NULL, 10, 1),
(5, 'Picasso', 'Pablo', '1881-10-25', '1973-04-08', 5, 3),
(6, 'Monet', 'Claude', '1840-11-14', '1926-12-05', 6, 3),
(7, 'Cézanne', 'Paul', '1839-01-19', '1906-10-22', 7, 3),
(8, 'Van Gogh', 'Vincent', '1853-03-30', '1890-07-29', 8, 3),
(9, 'Pacino', 'Al', '1940-04-25', NULL, 15, 2),
(10, 'De Niro', 'Robert', '1943-08-17', NULL, 12, 2),
(11, 'Hayek', 'Salma', '1966-09-02' , NULL, 7, 2),
(12, 'Cotillard', 'Marion', '1975-02-28', NULL, 6, 2),
(13, 'Duquesnoy', 'François', '1597-01-12', '1643-07-18', 3, 4),
(14, 'Gibbons', 'Grinling', '1648-04-04', '1721-08-03', 15, 4),
(15, 'De Dominici', 'Maria', '1645-12-06', '1703-03-18', 7, 4),
(16, 'Lalanne', 'Claude', '1925-11-28', '2019-04-10', 15, 4),
(17, 'Model', 'Lisette', '1901-11-10', '1983-03-30', 12, 5),
(18, 'Alvarez Bravo', 'Lola', '1907-04-03', '1993-07-31', 13, 5),
(19, 'Lindbergh', 'Peter', '1944-11-23', '2019-09-03', 3, 5),
(20, 'Greene', 'Stanley', '1949-02-14', '2017-05-19', 4, 5),
(21, 'Gibbons', 'Grinling', '1648-04-04', '1721-08-03', 20, 4),
(22, 'De Dominici', 'Maria', '1645-12-06', '1703-03-18', 14, 4),
(23, 'Lalanne', 'Claude', '1925-11-28', '2019-04-10', 20, 4),
(24, 'Model', 'Lisette', '1901-11-10', '1983-03-30', 15, 5),
(25, 'Alvarez Bravo', 'Lola', '1907-04-03', '1993-07-31', 17, 5),
(26, 'Lindbergh', 'Peter', '1944-11-23', '2019-09-03', 5, 5),
(27, 'Greene', 'Stanley', '1949-02-14', '2017-05-19', 9, 5),
(28, 'Hayek', 'Salma', '1966-09-02' , NULL, 14, 2),
(29, 'Cotillard', 'Marion', '1975-02-28', NULL, 12, 2),
(30, 'Duquesnoy', 'François', '1597-01-12', '1643-07-18', 6, 4),
(31, 'Gibbons', 'Grinling', '1648-04-04', '1721-08-03', 1, 4),
(32, 'De Dominici', 'Maria', '1645-12-06', '1703-03-18', 1, 4),
(33, 'Lalanne', 'Claude', '1925-11-28', '2019-04-10', 1, 4),
(34, 'Model', 'Lisette', '1901-11-10', '1983-03-30', 1, 5),
(35, 'Alvarez Bravo', 'Lola', '1907-04-03', '1993-07-31', 1, 5),
(36, 'Lindbergh', 'Peter', '1944-11-23', '2019-09-03', 1, 5),
(37, 'Greene', 'Stanley', '1949-02-14', '2017-05-19', 1, 5),
(38, 'Hayek', 'Salma', '1966-09-02' , NULL, 1, 2),
(39, 'Cotillard', 'Marion', '1975-02-28', NULL, 1, 2),
(40, 'Duquesnoy', 'François', '1597-01-12', '1643-07-18', 1, 4)
;

SELECT * FROM artistes;

