DROP TABLE IF EXISTS cities;
DROP TABLE IF EXISTS countries;

CREATE TABLE countries
(
	country_code CHAR(2) NOT NULL
	,country_name VARCHAR(100) NOT NULL
)
;


ALTER TABLE countries
	ADD PRIMARY KEY (country_code)
;


CREATE TABLE cities
(
	city_id SERIAL 
	,city_name VARCHAR(100) NOT NULL
)
;


ALTER TABLE cities
	ADD PRIMARY KEY (city_id)
	,ADD COLUMN country_code CHAR(2) NOT NULL
	,ADD CONSTRAINT fk_cities_countries FOREIGN KEY (country_code) REFERENCES countries(country_code)
;



	
	
	
	
	
	