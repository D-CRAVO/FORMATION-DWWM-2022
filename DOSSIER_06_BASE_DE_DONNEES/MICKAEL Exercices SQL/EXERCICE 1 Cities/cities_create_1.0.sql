DROP TABLE IF EXISTS cities;
DROP TABLE IF EXISTS countries;

CREATE TABLE cities
(
	city_id SERIAL
	,city_name VARCHAR(100) NOT NULL
	,country_code CHAR(2) NOT NULL
	--,PRIMARY KEY (city_id)
)
;

CREATE TABLE countries
(
	country_code CHAR(2)
	,country_name VARCHAR(100) NOT NULL
	--,PRIMARY KEY (country_code)
)
;

/*
ALTER TABLE cities
	ADD CONSTRAINT fk_cities_countries_id FOREIGN KEY (country_code) REFERENCES countries(country_code)
	ON UPDATE RESTRICT ON DELETE RESTRICT
;
*/


alter table countries
	add primary key (country_code)
;

	
alter table cities
	add primary key (city_id),
	add foreign key (country_code) references countries(country_code)
;

