DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS brands;
DROP TABLE IF EXISTS owners;

CREATE TABLE owners
	owner_id SERIAL
	,owner_lastname VARCHAR(50) NOT NULL
	,owner_firstname VARCHAR(50) NOT NULL
;

CREATE TABLE brands
	brand_id SERIAL
	,brand_name VARCHAR(50)
	,brand_slogan VARCHAR(255)
;

CREATE TABLE cars
	car_id
	,car_registration CHAR(9) NOT NULL UNIQUE
	,car_name

ALTER TABLE owners
	ADD PRIMARY KEY (owner_id)
;

ALTER TABLE brands
	ADD PRIMARY KEY (brand_id)
;
