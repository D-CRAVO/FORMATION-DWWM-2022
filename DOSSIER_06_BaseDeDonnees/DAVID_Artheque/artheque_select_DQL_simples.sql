SELECT 
	art_id
	,artist_id
	,artist_lastname
	,artist_firstname
	,artist_birthdate
	,artist_deathdate
FROM artists
;

SELECT * 
FROM artists
WHERE artist_deathdate = '2006-12-25'
;

SELECT 
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_deathdate = '2006-12-25'
;

SELECT 
	artist_firstname
	,artist_lastname 
FROM artists
WHERE artist_deathdate IS null
;

SELECT 
	artist_firstname
	,artist_lastname
	,artist_birthdate
FROM artists
WHERE artist_birthdate BETWEEN '1900-01-01' AND '2000-01-01'
;

SELECT 
	artist_firstname
	,artist_lastname
	,artist_birthdate
FROM artists
WHERE artist_birthdate < '2000-01-01'
;

-- Faire attention à la casse
-- P est le premier caractère du nom
SELECT 
artist_firstname, 
artist_lastname
FROM artists
WHERE artist_lastname LIKE 'P%'
;

SELECT 
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '%o'
;

SELECT 
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '%c%'
;

SELECT 
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '%C%'
;

SELECT
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '_____' 
ORDER BY artist_firstname
;

SELECT
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '%o%'
ORDER BY artist_firstname
;

SELECT 
	artist_firstname
	,artist_lastname
FROM artists
WHERE artist_lastname LIKE '%ode%'
ORDER BY artist_firstname
;

SELECT 
	art_id
	,artist_firstname
	,artist_lastname
FROM artists
WHERE 
	artist_lastname LIKE '%o%' AND 
	art_id = 3
ORDER BY artist_firstname
;

SELECT 
	art_id
	,artist_firstname
	,artist_lastname
FROM artists
WHERE 
	artist_lastname IN ('Monet', 'Picasso') 
	AND art_id = 3
ORDER BY artist_firstname
;

SELECT 
	art_id
	,artist_firstname
	,artist_lastname
FROM artists
WHERE 
	artist_firstname IN ('Monet', 'Picasso') 
	AND art_id = 3
ORDER BY artist_firstname
;

SELECT 
	art_id
	,SUM (artist_artwork)
FROM artists
GROUP BY art_id
ORDER BY art_id
;

SELECT 
	art_id
	,AVG (artist_artwork)
FROM artists
GROUP BY art_id
ORDER BY art_id
;

SELECT 
	art_id
	,artist_firstname
	,artist_lastname
	, AVG (artist_artwork)
FROM artists
GROUP BY art_id
	,artist_firstname
	,artist_lastname
ORDER BY art_id
;

SELECT
	art_id
	,artist_firstname
	,artist_lastname
	,MAX (artist_artwork)
FROM artists
GROUP BY art_id
	,artist_firstname
	,artist_lastname
ORDER BY art_id
;

SELECT
	art_id
	,artist_firstname
	,artist_lastname
	,MIN (artist_artwork)
FROM artists
GROUP BY art_id
	,artist_firstname
	,artist_lastname
ORDER BY art_id
;

