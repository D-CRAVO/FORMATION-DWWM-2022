DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS owners;
DROP TABLE IF EXISTS brands;


CREATE TABLE brands
(
	brand_id SERIAL
	,brand_name VARCHAR(50) NOT null
	,brand_slogan VARCHAR(255) null
)
;


ALTER TABLE brands
	ADD PRIMARY KEY (brand_id)
;


CREATE TABLE owners
(
	owner_id SERIAL
	,owner_lastname VARCHAR(50) NOT null
	,owner_firstname VARCHAR(50) NOT null
)
;


ALTER TABLE owners
	ADD PRIMARY KEY (owner_id)
;


CREATE TABLE cars
(
	car_id SERIAL
	,car_registration CHAR(9) NOT null
	,car_name VARCHAR(100) NOT null
	,car_owner_id INT NOT null
	,brand_id INT NOT null
)
;


ALTER TABLE cars
	ADD PRIMARY KEY (car_id),
	ADD FOREIGN KEY (car_owner_id) REFERENCES owners(owner_id)
		ON UPDATE RESTRICT ON DELETE RESTRICT,
	ADD FOREIGN KEY (brand_id) REFERENCES brands(brand_id)
		ON UPDATE RESTRICT ON DELETE RESTRICT
;

