/* VERSION 1 */ 

-- Sélectionner tous les éducateurs. (role educateur = 5)
SELECT person_lastname, person_firstname FROM people WHERE person_role_id = 5;

-- Sélectionner tous les employés autre que le directeur.
SELECT person_id, person_lastname, person_firstname FROM people WHERE person_role_id <> 1;

-- Sélectionner toutes les personnes triées par rôle puis par nom.
SELECT * FROM people ORDER BY person_role_id ASC, person_lastname ASC;

-- Sélectionner tous les rôles avec le nombre de personnes associées à chaque rôle.
SELECT * FROM roles;
SELECT roles.role_id, roles.role_name, COUNT(people.*) 
FROM roles JOIN people ON roles.role_id = people.person_role_id
GROUP BY (roles.role_id);

/* VERSION 2 */

-- 1 Sélectionner tous les résidents actifs du plus jeune au plus âgé


-- 2 Sélectionner tous les résidents suivis par un médecin avec nom et prénom du médecin attitré


-- 3 Sélectionner tous les médecins avec le nombre de résidents qu'ils suivent.



/* VERSION 3 */

-- 4 Sélectionner les activités en cours.
-- 5 Sélectionner les activités dont le nombre d’inscriptions a atteint le maximum.
SELECT 
	activity_label
	,event_cap_max
	,COUNT(ER.person_id) AS nb_people
FROM activities AS AC
	INNER JOIN events AS EV ON EV.activity_id = AC.activity_id
	INNER JOIN events_registration AS ER ON ER.event_id = EV.event_id
	INNER JOIN people AS PE ON PE.person_id = ER.person_id
GROUP BY
	activity_label
	,event_cap_max
HAVING COUNT(ER.person_id) >= event_cap_max

;

-- 6 Sélectionner les activités dont le nombre d’inscriptions est inférieur au minimum requis.
-- 7 Sélectionner les activités dont le nombre de places disponibles est inférieur au quart du maximum.
-- 8 Sélectionner les activités futures avec le nombre d’inscrits par activité.