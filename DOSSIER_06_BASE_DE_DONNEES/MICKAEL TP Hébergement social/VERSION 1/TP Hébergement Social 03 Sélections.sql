SELECT * FROM roles;
SELECT * FROM people;

SELECT person_lastname FROM people;

SELECT 
person_id, person_lastname, person_firstname, person_birthdate, person_hiredate, person_active, role_id
FROM people;

-- Sélectionner l'identifiant de la personne, l'identifiant du rôle, les nom et prénom de la personne
-- à partir de la table "people" où le role_id est égal à 6
SELECT 
person_id, role_id, person_firstname, person_lastname
FROM people
WHERE role_id = 6;

SELECT 
person_id, role_id, person_firstname, person_lastname
FROM people
WHERE role_id < 6;

SELECT 
person_id, role_id, person_firstname, person_lastname
FROM people
WHERE true;

SELECT 
person_id, role_id, person_firstname, person_lastname
FROM people
WHERE role_id <> 1;

-- Sélectionner l'identifiant de la personne, l'identifiant du rôle, les nom et prénom de la personne
-- à partir de la table "people" où le nom du rôle est différent de 'directeur'
SELECT 
role_id,
role_name
FROM people 
WHERE role_name <> 'directeur';

SELECT 
role_id,
role_name
FROM roles
WHERE
role_name = 'cuisinier' OR 
role_name = 'éducateur' OR 
role_name = 'médecin';

SELECT role_name 
FROM roles
WHERE role_name NOT IN('cuisinier', 'éducateur')

SELECT role_name FROM roles WHERE role_id = 1;

-- requête imbriquée
SELECT 
person_id, 
role_id, 
person_firstname, 
person_lastname
FROM people
WHERE role_id <> SELECT (role_id FROM roles WHERE role_id = 1); -- à éviter au possible

SELECT 
person_id, 
person_lastname, 
person_firstname, 
person_birthdate, 
person_hiredate, 
person_active, 
role_id
FROM people
WHERE true
ORDER BY person_lastname
;

SELECT 
person_id, 
person_lastname, 
person_firstname, 
person_birthdate, 
person_hiredate, 
person_active, 
role_id
FROM people
WHERE true
ORDER BY person_lastname ASC
;

SELECT 
person_id, 
person_lastname, 
person_firstname, 
person_birthdate, 
person_hiredate, 
person_active, 
role_id
FROM people
WHERE true
ORDER BY person_lastname DESC
;

SELECT 
person_id, 
person_lastname, 
person_firstname, 
person_birthdate, 
person_hiredate, 
person_active, 
role_id
FROM people
WHERE true
ORDER BY role_id DESC, person_birthdate ASC
;