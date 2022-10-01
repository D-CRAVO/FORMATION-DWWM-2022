--1
-- Sélectionner le nom de toutes les villes
SELECT
	city_name
FROM cities
;

--2
-- Sélectionner l’identifiant et le nom de toutes les villes triées par nom de ville et par ordre alphabétique.
SELECT 
	city_id
	,city_name
FROM cities
ORDER BY city_name ASC
;

--3
-- Sélectionner toutes les villes avec le nom du pays associé à chaque ville. 
-- Trier la liste par code pays et par ordre alphabétique inverse.
SELECT
	city_name
	,country_name
	,CI.country_code
FROM cities AS CI
	INNER JOIN countries AS CO ON CI.country_code = CO.country_code
ORDER BY country_code DESC
;

--4
-- Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. 
-- Les pays avec le moins de villes apparaissent en 1er
SELECT
	CO.country_code
	,country_name
	,COUNT(CI.country_code) AS nb_cities
FROM countries AS CO
	INNER JOIN cities AS CI ON CI.country_code = CO.country_code
GROUP BY 
	CO.country_code
	,country_name
ORDER BY nb_cities
;

--5

SELECT 
	CI.city_id
	,CI.city_name
	,CI.country_code
	,CO.country_name
	,COUNT(C2.country_code) AS nb_cities
FROM cities AS CI
	INNER JOIN countries AS CO ON CO.country_code = CI.country_code
	RIGHT JOIN cities AS C2 ON C2.country_code = CO.country_code
GROUP BY 
	CI.city_id
	,CI.city_name
	,CI.country_code
	,CO.country_name
ORDER BY 
	nb_cities DESC
	,city_id ASC
;










