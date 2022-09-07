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


-- Sélectionner le nom, salaire, date d’embauche de tous les employés triés par identifiant de manager (croissant) puis par 
-- nom (ordre alphabétique)

SELECT
	emp_lastname
	,emp_salary
	,emp_hiredate
	,emp_manager_id
FROM employees
WHERE emp_manager_id IS NOT null -- J'estime que le 'directeur' ne doit pas faire parti de la recherche
ORDER BY emp_manager_id ASC, emp_lastname
;

-- Sélectionner le nom, prénom, salaire, date d’embauche, nom et prénom du manager de tous les employés. 
-- Trier la liste par nom de manager (ordre croissant) puis par date d’embauche de la plus récente à la plus ancienne.

SELECT 
	p1.emp_lastname
	,p1.emp_salary
	,p1.emp_hiredate
	,p2.emp_lastname AS manager_lastname
	,p2.emp_firstname AS manager_firstname
FROM employees
	INNER JOIN employees AS p1 ON employees.emp_id = p1.emp_id
	INNER JOIN employees AS p2 ON employees.emp_manager_id = p2.emp_id
ORDER BY manager_lastname ASC, p1.emp_hiredate DESC
;

-- Sélectionner les employés sans manager.

SELECT 
	emp_lastname
	,emp_firstname
FROM employees
WHERE emp_manager_id IS null
;

-- Sélectionner le prénom et nom de tous les managers avec, pour chacun, le nombre de leur subordonnés. Les managers 
-- avec le moins de subordonnés apparaissent en 1er

/*
SELECT 
	p1.emp_firstname
	,p1.emp_lastname
	,COUNT(p2.emp_id)
FROM employees
	INNER JOIN employees AS p1 ON employees.emp_manager_id = p1.emp_id 
	INNER JOIN employees AS p2 ON p2.emp_id = employees.emp_id
GROUP BY p1.emp_firstname, p1.emp_lastname
;
*/

-- 






