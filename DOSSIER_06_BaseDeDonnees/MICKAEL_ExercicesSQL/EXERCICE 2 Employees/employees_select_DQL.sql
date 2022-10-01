-- 1
-- Sélectionner le nom, prénom et salaire de tous les employés triés par date d’embauche de la plus ancienne à la plus 
-- récente

SELECT
	emp_lastname
	,emp_firstname
	,emp_salary
	,emp_hiredate
FROM employees
ORDER BY emp_hiredate ASC
;


-- 2
-- Sélectionner le nom, salaire, date d’embauche de tous les employés triés par identifiant de manager (croissant) puis par 
-- nom (ordre alphabétique)

SELECT
	emp_lastname
	,emp_salary
	,emp_hiredate
	,emp_manager_id
FROM employees
-- WHERE emp_manager_id IS NOT null -- Si j'estime que le 'directeur' ne doit pas faire parti de la recherche
ORDER BY emp_manager_id ASC, emp_lastname ASC
;


-- 3
-- Sélectionner le nom, prénom, salaire, date d’embauche, nom et prénom du manager de tous les employés. 
-- Trier la liste par nom de manager (ordre croissant) puis par date d’embauche de la plus récente à la plus ancienne.

SELECT 
	EM.emp_lastname
	,EM.emp_salary
	,EM.emp_hiredate
	,MA.emp_lastname AS manager_lastname
	,MA.emp_firstname AS manager_firstname
FROM employees
	INNER JOIN employees AS EM ON employees.emp_id = EM.emp_id
	INNER JOIN employees AS MA ON employees.emp_manager_id = MA.emp_id
ORDER BY manager_lastname ASC, EM.emp_hiredate DESC
;

-- Autre syntaxe

SELECT 
	employee.emp_lastname
	,employee.emp_salary
	,employee.emp_hiredate
	,manager.emp_lastname AS manager_lastname
	,manager.emp_firstname AS manager_firstname
FROM employees AS employee
	INNER JOIN employees AS manager ON employee.emp_manager_id = manager.emp_id
ORDER BY manager_lastname ASC, emp_hiredate DESC
;

-- 4
-- Sélectionner les employés sans manager.

SELECT 
	emp_lastname
	,emp_firstname
FROM employees
WHERE emp_manager_id IS null
;


-- 5
-- Sélectionner le prénom et nom de tous les managers avec, pour chacun, le nombre de leur subordonnés. 
-- Les managers avec le moins de subordonnés apparaissent en 1er


SELECT 
	MA.emp_firstname
	,MA.emp_lastname
	,COUNT(EM.emp_id) AS resultat
FROM employees AS EM
	INNER JOIN employees AS MA ON EM.emp_manager_id = MA.emp_id 
GROUP BY MA.emp_firstname, MA.emp_lastname
ORDER BY resultat ASC
;


-- 6
-- Sélectionner le nom de tous les managers avec, pour chacun, la moyenne des salaires de leur subordonnés. 
-- Trier le résultat selon la valeur de la moyenne par ordre décroissant

SELECT
	MA.emp_firstname AS manager_firstname
	,MA.emp_lastname AS manager_lastname
	,MA.emp_id AS manager_id
	,AVG(EM.emp_salary) AS moyenne
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_manager_id = MA.emp_id
GROUP BY manager_firstname, manager_lastname, manager_id
ORDER BY moyenne DESC
;

SELECT
	e1.emp_lastname AS manager_lastname
	,AVG(e2.emp_salary) AS moyenne
FROM employees
	INNER JOIN employees AS e1 ON employees.emp_manager_id = e1.emp_id
	INNER JOIN employees AS e2 ON employees.emp_id = e2.emp_id
GROUP BY manager_lastname
ORDER BY moyenne DESC
;


-- 7
-- Créer la requête SELECT correspondant au résultat suivant 

-- Séléction des attributs de la directrice générale

SELECT
	emp_id
	,emp_lastname
	,emp_firstname
	,emp_salary
	,emp_hiredate
FROM employees
WHERE emp_lastname LIKE 'Holems'
;

SELECT
	emp_id
	,emp_lastname
	,emp_firstname
	,emp_salary
	,emp_hiredate
FROM employees
WHERE emp_manager_id IS null
;

-- Nombre d'employés

SELECT
	COUNT (emp_manager_id) AS number_of_employees
FROM employees
;

-- Séléction des salaires des employés

SELECT
	emp_salary
FROM employees
WHERE emp_manager_id IS NOT null
;

--

SELECT
	MA.emp_id
	,MA.emp_lastname
	,MA.emp_firstname
	,MA.emp_salary
	,COUNT (EM.emp_id) AS nb_sub
	,SUM(EM.emp_salary) AS total_salary
	,AVG(EM.emp_salary) AS average_salary
	,MIN(EM.emp_salary) AS poor_sub
	,MAX(EM.emp_salary) AS rich_sub
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_manager_id IS NOT null
WHERE MA.emp_manager_id IS null
GROUP BY MA.emp_id
;


