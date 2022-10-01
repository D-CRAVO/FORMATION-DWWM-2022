
-- a
SELECT
	plane_reference
	,plane_autonomy
	,plane_speed
FROM planes
ORDER BY plane_speed DESC
;


-- b
SELECT
	plane_reference
	,plane_capacity
	,plane_autonomy
	,plane_speed
	,plane_maker
FROM planes
	NATURAL JOIN manufacturers
ORDER BY plane_maker ASC , plane_autonomy DESC
;


-- c 
SELECT
	plane_reference
	,plane_capacity
	,plane_autonomy
	,plane_speed
	,plane_date
	,plane_maker_id
	,plane_maker
FROM planes
	NATURAL JOIN manufacturers
WHERE plane_maker LIKE 'B%'
;

--d
SELECT
	plane_reference
	,plane_capacity
	,plane_autonomy
	,plane_speed
	,plane_date
	,plane_maker_id
	,plane_maker
FROM planes
	NATURAL JOIN manufacturers
GROUP BY 
	plane_reference, plane_maker
HAVING plane_speed > 1000
	AND plane_capacity > 10
;


-- e
SELECT
	plane_maker
	,COUNT(plane_reference) AS nb_planes
	,AVG(plane_speed)
FROM planes
	NATURAL JOIN manufacturers
GROUP BY plane_maker
ORDER BY nb_planes ASC
;


-- f

-- Nom du fabricant avec capacité maximale
SELECT
	plane_maker
	,MAX(plane_capacity) AS max_capacity		-- Ok
FROM manufacturers
	NATURAL JOIN planes
GROUP BY 
	plane_maker
;

-- Nom du fabricant avec autonomie maximale
SELECT
	plane_maker
	,MAX(plane_autonomy) AS max_autonomy		-- Ok
FROM manufacturers
	NATURAL JOIN planes
GROUP BY 
	plane_maker
;

-- Nom du fabricant avec capacité maximale et autonomie maximale
SELECT
	plane_maker
	,MAX(plane_capacity) AS max_capacity		-- Ok
	,MAX(plane_autonomy) AS max_autonomy
FROM manufacturers
	NATURAL JOIN planes
GROUP BY 
	plane_maker
;

	
	
-- 
SELECT
	plane_maker
	,P1.plane_reference
	,MAX(P1.plane_capacity) AS max_capacity
	,P2.plane_reference
	,MAX(P2.plane_autonomy) AS max_autonomy
FROM manufacturers AS M1
	INNER JOIN planes AS P1 ON M1.plane_maker_id = P1.plane_maker_id
	INNER JOIN planes AS P2 ON M1.plane_maker_id = P2.plane_maker_id
GROUP BY 
	plane_maker
	,P1.plane_reference
	,P2.plane_reference
ORDER BY plane_maker ASC
;


