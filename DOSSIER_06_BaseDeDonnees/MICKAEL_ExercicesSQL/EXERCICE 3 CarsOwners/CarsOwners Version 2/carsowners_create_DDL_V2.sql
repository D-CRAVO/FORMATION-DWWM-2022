
DROP TABLE IF EXISTS cars_owners;
DROP TABLE IF EXISTS owners;
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS brands;


CREATE TABLE brands
(
	brand_id SERIAL
	,brand_name VARCHAR(50)
	,brand_slogan VARCHAR(255)
)
;

ALTER TABLE brands
	ADD PRIMARY KEY (brand_id)
;

CREATE TABLE cars
(
	car_id SERIAL
	,car_name VARCHAR(50) NOT null
	,brand_id INT NOT null
)
;

ALTER TABLE cars
	ADD CONSTRAINT fk_cars_brands FOREIGN KEY (brand_id) REFERENCES brands(brand_id)
	,ADD PRIMARY KEY (car_id)
;

CREATE TABLE owners
(
	owner_id SERIAL
	,owner_lastname VARCHAR(50)
	,owner_firstname VARCHAR(50)
)
;

ALTER TABLE owners
	ADD PRIMARY KEY (owner_id)
;

CREATE TABLE cars_owners
(
	car_id INT NOT null
	,car_owner_id INT NOT null
	,car_registration CHAR(9) NOT null
)
;

ALTER TABLE cars_owners
	ADD PRIMARY KEY (car_id, car_owner_id)
	,ADD CONSTRAINT fk_cars_cars_owners FOREIGN KEY (car_id) REFERENCES cars(car_id)
	,ADD CONSTRAINT fk_owners_cars_owners FOREIGN KEY (car_owner_id) REFERENCES owners(owner_id)
;

