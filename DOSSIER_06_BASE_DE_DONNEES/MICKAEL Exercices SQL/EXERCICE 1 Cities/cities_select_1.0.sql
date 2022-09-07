-- Sélectionner le nom de toutes les villes

SELECT 
	city_name
FROM cities
;


-- Sélectionner l’identifiant et le nom de toutes les villes triées par nom de ville et par ordre alphabétique

SELECT 
	city_id
	,city_name
FROM cities
ORDER BY city_name ASC
;


-- Sélectionner toutes les villes avec le nom du pays associé à chaque ville. Trier la liste par code pays et par ordre 
-- alphabétique inverse

SELECT
	city_name
	,country_name
FROM cities
	LEFT JOIN countries ON cities.country_code = countries.country_code
ORDER BY countries.country_code DESC
;


-- Sélectionner le code ISO et le nom de tous les pays avec le nombre de villes par pays. Les pays avec le moins de villes 
-- apparaissent en 1er

SELECT 
	countries.country_code
	,country_name
	,COUNT (cities.country_code) AS resultat
FROM countries
	INNER JOIN cities ON cities.country_code = countries.country_code
GROUP BY countries.country_code, country_name
ORDER BY resultat
;


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
	city_id
	,city_name
	,c1.country_code
	,c1.country_name
	,COUNT (c2.country_code)
FROM cities
	INNER JOIN countries AS c1 ON cities.country_code = c1.country_code
	INNER JOIN countries AS c2 ON cities.country_code = c2.country_code
GROUP BY city_id, city_name, c1.country_code, c1.country_name
ORDER BY city_id
;

