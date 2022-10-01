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
ORDER BY emp_manager_id ASC
	,emp_lastname ASC
;


-- 3
-- Sélectionner le nom, prénom, salaire, date d’embauche, nom et prénom du manager de tous les employés. 
-- Trier la liste par nom de manager (ordre croissant) puis par date d’embauche de la plus récente à la plus ancienne.

SELECT 
	EM.emp_lastname
	,EM.emp_firstname
	,EM.emp_salary
	,EM.emp_hiredate
	,MA.emp_lastname AS manager_lastname
	,MA.emp_firstname AS manager_firstname
FROM employees AS EM
	INNER JOIN employees AS MA ON MA.emp_id = EM.emp_manager_id
ORDER BY MA.emp_lastname, EM.emp_hiredate
;


-- 4
-- Sélectionner les employés sans manager.

SELECT
	emp_lastname
	,emp_firstname
	,emp_manager_id
FROM employees
WHERE emp_manager_id IS NULL
;


-- 5
-- Sélectionner le prénom et nom de tous les managers avec, pour chacun, le nombre de leur subordonnés. 
-- Les managers avec le moins de subordonnés apparaissent en 1er

SELECT 
	MA.emp_firstname AS manager_firstname
	,MA.emp_lastname AS manager_lastname
	,COUNT(SU.emp_manager_id) AS nb_subordinate
FROM employees AS SU
	INNER JOIN employees AS MA ON MA.emp_id = SU.emp_manager_id
GROUP BY manager_firstname, manager_lastname
ORDER BY nb_subordinate ASC
;


-- 6
-- Sélectionner le nom de tous les managers avec, pour chacun, la moyenne des salaires de leur subordonnés. 
-- Trier le résultat selon la valeur de la moyenne par ordre décroissant

SELECT
	MA.emp_lastname AS manager_lastname
	,AVG(SU.emp_salary) AS medium_salary
FROM employees AS MA
	INNER JOIN employees AS SU ON SU.emp_manager_id = MA.emp_id
GROUP BY manager_lastname
ORDER BY medium_salary DESC
;


-- 7
-- Créer la requête SELECT correspondant au résultat suivant 

SELECT
	MA.emp_id
	,MA.emp_lastname
	,MA.emp_firstname
	,MA.emp_salary
	,MA.emp_hiredate
	,COUNT(EM.emp_manager_id)
	,SUM(EM.emp_salary)
	,AVG(EM.emp_salary)
FROM employees AS MA
	INNER JOIN employees AS EM ON EM.emp_id <> MA.emp_id
WHERE MA.emp_manager_id IS null
GROUP BY MA.emp_id
;

	