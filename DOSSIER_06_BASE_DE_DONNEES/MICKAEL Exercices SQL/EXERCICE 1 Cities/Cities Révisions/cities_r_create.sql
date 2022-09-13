DROP TABLE IF EXISTS cities;
DROP TABLE IF EXISTS countries;

CREATE TABLE countries
(
	country_code CHAR(2)
	,country_name VARCHAR(100)
)
;

CREATE TABLE cities
(
	city_id SERIAL
	,city_name VARCHAR(100)
	,country_code CHAR(2)
)
;

ALTER TABLE countries
	ADD PRIMARY KEY (country_code)
;

ALTER TABLE cities
	ADD PRIMARY KEY (city_id)
	,ADD CONSTRAINT fk_cities_countries FOREIGN KEY (country_code) REFERENCES countries (country_code)
;