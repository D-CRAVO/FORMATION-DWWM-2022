-- Sélectionner tous les résidents actifs du plus jeune au plus agé

SELECT 
	people.person_id
	,person_firstname
	,person_lastname
	,resident_date_arrival
	,person_birthdate
FROM residents
	INNER JOIN people ON residents.person_id = people.person_id
WHERE resident_date_leave IS NULL 
ORDER BY person_birthdate DESC
;

-- Sélectionner tous les résidents suivis par un médecin avec nom et prénom du médecin attitré

SELECT
	person_firstname
	,person_lastname
	,doctor_id
	,(SUM (person_id))/person_id AS somme
FROM people 
INNER JOIN residents ON person_id = resident_id
WHERE doctor_id IS NOT NULL
GROUP BY doctor_id, person_firstname, person_lastname, person_id
;

SELECT 
	person_firstname
	,person_lastname
	,resident_doctor_id
FROM residents
	INNER JOIN people ON residents.person_id = people.person_id
WHERE resident_doctor_id IS NOT NULL
;

SELECT 
	person_firstname
	,person_lastname
	,resident_doctor_id
FROM residents
	INNER JOIN people ON residents.resident_doctor_id = people.person_id
WHERE resident_doctor_id IS NOT NULL
;

SELECT 
	p1.person_firstname
	,p1.person_lastname
	,resident_doctor_id
	,p2.person_lastname as doctor_lastname
FROM residents
	INNER JOIN people as p1 ON residents.person_id = p1.person_id
	INNER JOIN people as p2 ON residents.resident_doctor_id = p2.person_id
WHERE resident_doctor_id IS NOT NULL
;

-- Sélectionner tous les médecins avec le nombre de résidents qu'ils suivent

SELECT
	person_lastname
	,person_firstname
	,COUNT (resident_doctor_id)
FROM people 
INNER JOIN residents ON people.person_id = residents.person_id
WHERE resident_doctor_id IS NOT NULL
GROUP BY resident_doctor_id, person_lastname, person_firstname
;

SELECT
	COUNT (resident_doctor_id)
FROM people 
INNER JOIN residents ON people.person_id = residents.person_id
WHERE resident_doctor_id IS NOT NULL
GROUP BY resident_doctor_id
;

SELECT
	person_lastname
	,person_firstname
	,COUNT (resident_doctor_id)
FROM people 
INNER JOIN residents ON people.person_id = residents.person_id
WHERE resident_doctor_id IS NOT NULL
GROUP BY person_lastname, person_firstname
;

SELECT
	person_lastname
	,person_firstname
	,COUNT (resident_doctor_id)
FROM people 
INNER JOIN residents ON people.person_id = residents.person_id
GROUP BY person_lastname, person_firstname
;



