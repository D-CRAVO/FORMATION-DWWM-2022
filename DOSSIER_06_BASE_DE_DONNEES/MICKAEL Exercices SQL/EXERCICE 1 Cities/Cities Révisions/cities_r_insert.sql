TRUNCATE TABLE countries RESTART IDENTITY CASCADE;
TRUNCATE TABLE cities RESTART IDENTITY;


INSERT INTO countries
VALUES
('FR', 'France')
,('US', 'United States')
,('RU', 'Russian Federation')
;

INSERT INTO cities
(
	city_name
	,country_code
)
VALUES
('Paris', 'FR')
,('Lyon', 'FR')
,('Toulouse', 'FR')
,('Marseille', 'FR')
,('Mulhouse', 'FR')
,('Boston', 'US')
,('Los Angeles', 'US')
,('Washington', 'US')
,('New York', 'US')
,('Moscou', 'RU')
,('Saint-Pétersbourg', 'RU')
;
