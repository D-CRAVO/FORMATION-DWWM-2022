
SELECT * FROM people
;

SELECT *
FROM roles, people
;

SELECT 
	COUNT (*) 
FROM people
WHERE person_role_id = 1
;

SELECT *
FROM roles, people
WHERE roles.role_id = people.person_role_id
;

SELECT 
	
	COUNT (*)
FROM people
	INNER JOIN roles ON role_id = person_role_id
;

SELECT 
	COUNT (*)
FROM people
	INNER JOIN roles ON role_id = person_role_id
WHERE roles.role_id = people.person_role_id
;

SELECT 
	role_name

FROM people
	INNER JOIN roles ON role_id = person_role_id
GROUP BY role_name
;

SELECT 
	role_name,
	COUNT (*)
FROM people
	INNER JOIN roles ON role_id = person_role_id
GROUP BY role_name
;