-- 1
-- Sélectionner le nom et le numéro d’immatriculation de toutes les voitures triées par immatriculation (ordre croissant).

SELECT 
(
	car_name
	,car_registration
)
FROM cars
ORDER BY car_registration ASC
;


-- 2
-- Sélectionner toutes les informations de toutes les voitures, incluant le nom de la marque ainsi que le nom et prénom du 
-- propriétaire. Trier la liste par nom de marque (ordre croissant) puis par nom de propriétaire (ordre croissant)

SELECT *
FROM cars
	INNER JOIN brands ON cars.brand_id = brands.brand_id
	INNER JOIN owners ON cars.car_owner_id = owners.owner_id
ORDER BY brand_name ASC, owner_lastname ASC
;


-- 3
-- Sélectionner le nom de toutes les marques incluant le nombre de voitures de chaque marque

SELECT 
	brand_name
	,COUNT (car_name)
FROM brands
	NATURAL JOIN cars
GROUP BY brand_name
;


-- 4
-- Sélectionner le nom de toutes les marques incluant le nombre de propriétaires de chaque marque

SELECT
	brand_name
	,COUNT (DISTINCT owner_id)
FROM brands
	NATURAL JOIN cars
	INNER JOIN owners ON car_owner_id = owner_id
GROUP BY brand_id
;

SELECT
	brand_name									
	,COUNT(DISTINCT car_owner_id)
FROM brands
	NATURAL JOIN cars
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
GROUP BY owner_lastname, owner_firstname
HAVING LENGTH (owner_firstname) > 5
;


-- 7
-- Sélectionner les noms et prénoms des propriétaires possédant plus d’une voiture avec le nombre de voitures possédées 
-- par propriétaire. Trier la liste par nombre de voitures possédées. Les propriétaires possédant le plus de voitures
-- apparaissent en 1er

SELECT
	owner_lastname
	,owner_firstname
	,COUNT (car_registration) AS num_cars
FROM owners
	INNER JOIN cars ON car_owner_id = owner_id
GROUP BY owner_firstname, owner_lastname
ORDER BY num_cars DESC
;


-- 8
-- Sélectionner les noms et prénoms des propriétaires possédant plus d’une voiture de même marque. Pour chaque marque 
-- de voiture trouvée, afficher le nom de la marque et le nombre de voiture possédées pour cette marque

SELECT
	owner_lastname
	,owner_firstname
	,brand_name
	,COUNT (owner_id)
FROM owners
	INNER JOIN cars ON owner_id = car_owner_id
	NATURAL JOIN brands
GROUP BY owner_id, brand_name
HAVING COUNT (owner_id) > 1
;


