-- 1
-- Sélectionner le nom et le numéro d’immatriculation de toutes les voitures triées par immatriculation (ordre croissant).

SELECT 
	car_name
	,car_registration
FROM cars
	NATURAL JOIN cars_owners
ORDER BY car_registration ASC
;


-- 2
-- Sélectionner toutes les informations de toutes les voitures, incluant le nom de la marque ainsi que le nom et prénom du 
-- propriétaire. Trier la liste par nom de marque (ordre croissant) puis par nom de propriétaire (ordre croissant)

SELECT 
	car_id
	,brand_id
	,brand_name
	,car_name
	,car_registration
	,owner_lastname
	,owner_firstname
FROM cars
	NATURAL JOIN brands
	NATURAL JOIN cars_owners
	INNER JOIN owners ON cars_owners.car_owner_id = owners.owner_id
ORDER BY brand_name ASC
	,owner_lastname ASC
;
	

-- 3
-- Sélectionner le nom de toutes les marques incluant le nombre de voitures de chaque marque

SELECT 
	brand_name
	,COUNT (car_id)
FROM brands
	NATURAL JOIN cars
GROUP BY brand_name
;


-- 4
-- Sélectionner le nom de toutes les marques incluant le nombre de propriétaires de chaque marque

SELECT 
	brand_name
	,COUNT (DISTINCT car_owner_id)
FROM brands
	NATURAL JOIN cars
	NATURAL JOIN cars_owners
GROUP BY brand_name
;


-- 5
-- Sélectionner les prénoms des propriétaires dont le prénom commence par la lettre A

SELECT 
	owner_firstname
FROM owners
WHERE owner_firstname LIKE 'A%'
;


-- 6
-- Sélectionner le noms et prénom des propriétaires dont le prénom contient plus de 5 lettres

SELECT 
	owner_lastname
	,owner_firstname
FROM owners
GROUP BY owner_id
HAVING LENGTH(owner_firstname) > 5
;


-- 7
-- Sélectionner les noms et prénoms des propriétaires possédant plus d’une voiture avec le nombre de voitures possédées 
-- par propriétaire. Trier la liste par nombre de voitures possédées. Les propriétaires possédant le plus de voitures
-- apparaissent en 1er

SELECT
	owner_firstname
	,owner_lastname
	,COUNT (car_id) AS nb_cars
FROM owners
	INNER JOIN cars_owners ON owners.owner_id = cars_owners.car_owner_id
	NATURAL JOIN cars
GROUP BY owner_lastname, owner_firstname
HAVING COUNT (car_id) > 1
ORDER BY nb_cars DESC
;


-- 8
-- Sélectionner les noms et prénoms des propriétaires possédant plus d’une voiture de même marque. Pour chaque marque 
-- de voiture trouvée, afficher le nom de la marque et le nombre de voiture possédées pour cette marque

SELECT 
	owner_lastname
	,owner_firstname
	,brand_name
	,COUNT (brand_id) AS nb_cars
FROM owners
	INNER JOIN cars_owners ON cars_owners.car_owner_id = owners.owner_id
	NATURAL JOIN cars
	NATURAL JOIN brands
GROUP BY owner_lastname, owner_firstname, brand_name
HAVING COUNT(brand_id) > 1
ORDER BY nb_cars
;
