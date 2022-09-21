--1
-- Sélectionner le nom, prénom et salaire de tous les employés 
-- triés par date d’embauche de la plus ancienne à la plus récente
SELECT 
	emp_firstname
	,emp_lastname
	,emp_salary
	,emp_hiredate
FROM employees
ORDER BY emp_hiredate ASC
;

--2
-- Sélectionner le nom, salaire, date d’embauche de tous les employés 
-- triés par identifiant de manager (croissant) puis par nom (ordre alphabétique).
SELECT
	emp_lastname
	,emp_salary
	,emp_hiredate
	,emp_manager_id
FROM employees
ORDER BY emp_manager_id ASC
	,emp_lastname DESC
;

--3
-- Sélectionner le nom, prénom, salaire, date d’embauche, nom et prénom du manager de tous les employés. 
-- Trier la liste par nom de manager (ordre croissant) puis par date d’embauche de la plus récente à la plus ancienne
SELECT 
	E1.emp_lastname
	,E1.emp_firstname
	,E1.emp_salary
	,E1.emp_hiredate
	,E2.emp_lastname
	,E2.emp_firstname
FROM employees AS E1
	INNER JOIN employees AS E2 ON E2.emp_id = E1.emp_manager_id
ORDER BY 
	E2.emp_lastname ASC
	,E1.emp_hiredate DESC
;
	
--4
-- Sélectionner les employés sans manager.
SELECT 
	emp_lastname
	,emp_firstname
FROM employees
WHERE emp_manager_id IS NULL
;

--5
-- Sélectionner le prénom et nom de tous les managers avec, pour chacun, 
-- le nombre de leur subordonnés. Les managers avec le moins de subordonnés apparaissent en 1er
SELECT 
	MA.emp_firstname
	,MA.emp_lastname
	,COUNT(EM.emp_manager_id) nb_subordonies
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_manager_id = MA.emp_id
GROUP BY 
	MA.emp_firstname
	,MA.emp_lastname
ORDER BY nb_subordonies ASC
;

--6
-- Sélectionner le nom de tous les managers avec, pour chacun, la moyenne des salaires de leur subordonnés. 
-- Trier le résultat selon la valeur de la moyenne par ordre décroissant.
SELECT 
	MA.emp_firstname
	,AVG(EM.emp_salary) AS average_salary
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_manager_id = MA.emp_id
GROUP BY 
	MA.emp_firstname
ORDER BY 
	average_salary DESC
;
	
--7
--Créer la requête SELECT correspondant au résultat suivant : 
SELECT 
	MA.emp_manager_id
	,MA.emp_lastname
	,MA.emp_firstname
	,MA.emp_salary
	,COUNT(EM.emp_id)
	,SUM(EM.emp_salary)
	,AVG(ROUND(EM.emp_salary))
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_manager_id IS NOT NULL
WHERE MA.emp_manager_id IS NULL
GROUP BY 
	MA.emp_manager_id
	,MA.emp_lastname
	,MA.emp_firstname
	,MA.emp_salary
;






