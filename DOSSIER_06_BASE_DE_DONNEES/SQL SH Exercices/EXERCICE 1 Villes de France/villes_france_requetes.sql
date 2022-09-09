-- 1 obtenir la liste des 10 villes les plus peuplées en 2012
select 
	ville_nom_reel
	,ville_population_2012
from villes_france_free
order by ville_population_2012 desc
limit 10
;

-- 2 obtenir la liste des 50 villes ayant la plus faible superficie
select 
	ville_nom_reel
	,ville_surface
from villes_france_free
order by ville_surface asc
limit 50
;

-- 3
-- Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97”
select 
	departement_nom
	,departement_code
from departement
where departement_code like '97%'
;

-- 4 
-- Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé

select 
	ville_nom_reel
	,ville_population_2012
	,departement_nom
from villes_france_free
	-- join departement on ville_departement = departement_code
	left join departement on ville_departement = departement_code
order by ville_population_2012 desc
limit 10
;

-- 5
-- Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces département, 
-- en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes

select 
	departement_nom
	,departement_code
	,count (ville_id) as nb
from villes_france_free
	join departement on departement_code = ville_departement
group by departement_nom, departement_code
order by nb desc
;

-- Correction
SELECT departement_nom, ville_departement, COUNT(*) AS nbr_items 
FROM villes_france_free
LEFT JOIN departement ON departement_code = ville_departement
GROUP BY ville_departement, departement_nom
ORDER BY nbr_items DESC
;


-- 6
-- Obtenir la liste des 10 plus grands départements, en terme de superficie

select 
	departement_nom
	,sum (ville_surface) as resultat
from departement
	join villes_france_free on ville_departement = departement_code
group by departement_nom
order by resultat desc
limit 10
;
	
-- Correction
SELECT departement_nom, ville_departement, SUM(ville_surface) AS dpt_surface 
FROM villes_france_free
LEFT JOIN departement ON departement_code = ville_departement
GROUP BY departement_nom, ville_departement  
ORDER BY dpt_surface  DESC
LIMIT 10
;


-- 7 
-- Compter le nombre de villes dont le nom commence par “Saint”
	
select
	ville_nom_reel
from villes_france_free
where ville_nom_reel like 'Saint%'
	
select
(
	select
		ville_nom_reel
	from villes_france_free
	where ville_nom_reel like 'Saint%'
)
as resultat
;

select
	count (resultat)
from villes_france_free
;

