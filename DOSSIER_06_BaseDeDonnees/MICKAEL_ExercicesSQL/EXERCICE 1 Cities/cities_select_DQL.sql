-- 1
-- Sélectionner le nom de toutes les villes

SELECT 
	city_name
FROM cities
;


-- Complément

SELECT 
	city_name
FROM cities
WHERE city_name LIKE 'M%' 
	OR city_name LIKE 'm%'
;

SELECT 
	city_name
FROM cities
WHERE city_name LIKE '%E' 
	OR city_name LIKE '%e'
;

SELECT 
	city_name
FROM cities
WHERE city_name LIKE '%l%'
	OR city_name NOT LIKE '%L%'
;

SELECT 
	city_name
	,LENGTH(city_name) AS longueur
FROM cities
GROUP BY city_name
HAVING LENGTH(city_name) > 5
ORDER BY longueur ASC
LIMIT 3
;

SELECT 
	city_name
	,LENGTH(city_name) AS longueur
FROM cities
GROUP BY city_name
HAVING LENGTH(city_name) > 5
ORDER BY longueur ASC
LIMIT 2 OFFSET 3
;


-- 2
-- Sélectionner l’identifiant et le nom de toutes les villes triées par nom de ville et par ordre alphabétique

SELECT 
	city_id
	,city_name
FROM cities
ORDER BY city_name ASC
;


-- 3
-- Sélectionner toutes les villes avec le nom du pays associé à chaque ville. Trier la liste par code pays et par ordre 
-- alphabétique inverse

SELECT
	city_name
	,country_name
FROM cities
	LEFT JOIN countries ON cities.country_code = countries.country_code
ORDER BY countries.country_code DESC
;

SELECT 
	city_name
	,country_name
FROM cities
	NATURAL JOIN countries
ORDER BY country_code DESC
;


-- 4
-- Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. Les pays avec le moins de villes 
-- apparaissent en 1er

SELECT 
	country_code
	,country_name
FROM countries
;

SELECT
	COUNT (cities.*)
FROM cities
WHERE country_code = 'FR'
;

SELECT
	countries.country_code AS code
	,country_name
	,COUNT (cities.*)
FROM countries
	INNER JOIN cities ON countries.country_code = cities.country_code
GROUP BY code, country_name
;

SELECT 
	countries.country_code
	,country_name
	,COUNT (cities.country_code) AS resultat
FROM countries
	INNER JOIN cities ON cities.country_code = countries.country_code
GROUP BY countries.country_code, country_name
ORDER BY resultat
;

SELECT 
	countries.country_code
	,country_name
	,COUNT (cities.country_code) AS resultat
FROM countries
	NATURAL JOIN cities
GROUP BY countries.country_code, country_name
ORDER BY resultat
;


-- 5
-- Créer la requête SELECT correspondant au résultat suivant :
	
SELECT
	city_id
	,city_name
	,cities.country_code
	,country_name
	,(
		SELECT 
			COUNT (Ccities.country_code)
		FROM cities AS Ccities
		WHERE Ccities.country_code = cities.country_code
	 )
FROM cities
	INNER JOIN countries ON cities.country_code = countries.country_code
ORDER BY city_id
;

-- Faire la même requête avec une double jointure

SELECT
	cities.city_id
	,cities.city_name
	,cities.country_code
	,countries.country_name
	,COUNT (cit.*)
FROM countries
	NATURAL JOIN cities
	INNER JOIN cities AS cit ON cit.country_code = countries.country_code
GROUP BY cities.city_id, countries.country_code, cities.country_code
ORDER BY cities.city_id
;

SELECT
	city_id
	,city_name
	,country_code
	,country_name
FROM cities
	NATURAL JOIN countries
;
	
SELECT
	country_code
	,COUNT(cities.country_code)
FROM cities
GROUP BY country_code
;

SELECT
	city_id
	,city_name
	,country_code
	,country_name
	,
	(
		SELECT
			COUNT(cit.country_code)
		FROM cities as cit
		WHERE cit.country_code  = countries.country_code
		GROUP BY country_code
	)
FROM cities AS cit
	NATURAL JOIN countries

SELECT 
	


-- GROUP BY city_id, city_name, coun.country_code, countries.country_name
	


