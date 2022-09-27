SELECT * FROM people
;
SELECT * FROM residents
;
SELECT * FROM roles
;

-- Sélectionner tous les éducateurs

SELECT 
	person_id
	,person_lastname
	,person_firstname
FROM people
WHERE person_role_id = 6
;

-- Sélectionner tous les employés autre que le directeur

SELECT 
	person_lastname
	,person_firstname
	,person_role_id
FROM people
WHERE person_role_id <> 7
;

-- Sélectionner toutes les personnes triées par role puis par nom

SELECT *
FROM  people
ORDER BY person_role_id ASC, person_lastname DESC
;

-- Sélectionner tous les rôles avec le nombre de personnes associées à chaque rôle

SELECT 
	role_name,
	COUNT (*)
FROM people
	INNER JOIN roles ON role_id = person_role_id
GROUP BY role_name
;

