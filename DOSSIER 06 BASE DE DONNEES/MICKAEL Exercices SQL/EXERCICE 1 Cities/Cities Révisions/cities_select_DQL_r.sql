-- 1
-- Sélectionner le nom de toutes les villes

SELECT 
	city_name
FROM cities
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
	,country_code
FROM cities
	NATURAL JOIN countries
ORDER BY 
	country_code ASC
	,city_name DESC
;

-- 4
-- Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. Les pays avec le moins de villes 
-- apparaissent en 1er

SELECT
	country_code
	,country_name
	,COUNT (city_name) AS nb_cities
FROM countries
	NATURAL JOIN cities
GROUP BY 
	country_code
	,country_name
ORDER BY nb_cities
;


-- 5
-- Créer la requête SELECT correspondant au résultat suivant :
	
SELECT 
	C1.city_id
	,C1.city_name
	,CO.country_code
	,CO.country_name
	,COUNT(C1.country_code) AS nb_cities
FROM cities AS C1
	NATURAL JOIN countries AS CO
	INNER JOIN cities AS C2 ON C2.country_code = C1.country_code
GROUP BY 
	C1.city_id
	,C1.city_name
	,CO.country_code
	,CO.country_name
ORDER BY city_id ASC
;
