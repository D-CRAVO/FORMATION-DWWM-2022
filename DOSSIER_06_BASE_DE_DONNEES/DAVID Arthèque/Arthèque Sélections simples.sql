SELECT 
artiste_id,
artiste_nom,
artiste_prenom,
artiste_naissance,
artiste_deces,
art_id
FROM artistes;

SELECT * 
FROM artistes
WHERE artiste_deces = '2006-12-25';

SELECT 
artiste_prenom, 
artiste_nom
FROM artistes
WHERE artiste_deces = '2006-12-25'
;

SELECT 
artiste_prenom, 
artiste_nom 
FROM artistes
WHERE artiste_deces is null
;

SELECT 
artiste_prenom, 
artiste_nom, 
artiste_naissance
FROM artistes
WHERE artiste_naissance BETWEEN '1900-01-01' AND '2000-01-01'
;

SELECT 
artiste_prenom, 
artiste_nom, 
artiste_naissance
FROM artistes
WHERE artiste_naissance < '2000-01-01'
;

-- Faire attention à la casse
-- P est le premier caractère du nom
SELECT 
artiste_prenom, 
artiste_nom
FROM artistes
WHERE artiste_nom LIKE 'P%'
;

SELECT 
artiste_prenom, 
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '%o'
;

SELECT 
artiste_prenom,
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '%c%'
;

SELECT 
artiste_prenom,
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '%C%'
;

SELECT
artiste_prenom,
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '_____' 
ORDER BY artiste_prenom
;

SELECT
artiste_prenom,
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '%o%'
ORDER BY artiste_prenom
;

SELECT 
artiste_prenom,
artiste_nom
FROM artistes
WHERE artiste_nom LIKE '%ode%'
ORDER BY artiste_prenom
;

SELECT 
artiste_prenom,
artiste_nom,
art_id
FROM artistes
WHERE 
artiste_nom LIKE '%o%' AND 
art_id = 3
ORDER BY artiste_prenom
;

SELECT 
artiste_prenom,
artiste_nom,
art_id
FROM artistes
WHERE 
artiste_nom IN ('Monet', 'Picasso') AND 
art_id = 3
ORDER BY artiste_prenom
;

SELECT 
artiste_prenom,
artiste_nom,
art_id
FROM artistes
WHERE 
artiste_nom IN ('Monet', 'Picasso') AND 
art_id = 3
ORDER BY artiste_prenom
;

SELECT 
art_id
, SUM (artiste_oeuvres)
FROM artistes
GROUP BY art_id
ORDER BY art_id
;

SELECT 
art_id
, AVG (artiste_oeuvres)
FROM artistes
GROUP BY art_id
ORDER BY art_id
;

SELECT 
art_id,
artiste_prenom,
artiste_nom
, AVG (artiste_oeuvres)
FROM artistes
GROUP BY art_id, 
artiste_prenom, 
artiste_nom
ORDER BY art_id
;

SELECT
art_id,
artiste_prenom,
artiste_nom
, MAX (artiste_oeuvres)
FROM artistes
GROUP BY art_id,
artiste_prenom,
artiste_nom
ORDER BY art_id
;

SELECT
art_id,
artiste_prenom,
artiste_nom
, MIN (artiste_oeuvres)
FROM artistes
GROUP BY art_id,
artiste_prenom,
artiste_nom
ORDER BY art_id
;

SELECT 
artiste_prenom,
artiste_nom
, 


