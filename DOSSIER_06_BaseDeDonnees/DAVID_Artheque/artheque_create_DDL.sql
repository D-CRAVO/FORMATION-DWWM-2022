DROP TABLE IF EXISTS artists;
DROP TABLE IF EXISTS arts CASCADE;

CREATE TABLE arts
(
	art_id SERIAL
	,art_name VARCHAR(50) NOT NULL
	,PRIMARY KEY (art_id)
)
;

CREATE TABLE artists
(
	artist_id SERIAL
	,artist_lastname VARCHAR(50) NOT NULL
	,artist_firstname VARCHAR(50) NOT NULL
	,artist_birthdate DATE NOT NULL
	,artist_deathdate DATE
	,artist_artwork INT NOT NULL
	,art_id INT
	,PRIMARY KEY (artist_id)
)
;

ALTER TABLE artists 
	ADD FOREIGN KEY (art_id) REFERENCES arts(art_id)
;


