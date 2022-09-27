--2

--Requêtage simple

--2.1 Simple

--2.1.1
/*
Lister le contenu de la table Seances
*/
SELECT * FROM seances;

--2.1.2
/*
Lister les sportifs par ordre croissant d'âge
*/
SELECT
    Nom
    ,Age
FROM Sportifs
ORDER BY Age ASC
;

--2.1.3
/*
Lister les 5 gymnases les plus grands
*/
SELECT
    NomGymnase
    ,Surface
FROM Gymnases
ORDER BY Surface DESC
;

--2.2 Restriction

--2.2.1
/*
Lister les sportifs (nom et prénom) agés strictement de plus de 30 ans
*/
SELECT
    Nom
    ,Prenom
    ,Age
FROM Sportifs
WHERE Age > 30
;

--2.2.2
/*
Lister les gymnases de la ville de "STAINS"
*/
SELECT
    NomGymnase
    ,Ville
FROM Gymnases
WHERE Ville LIKE 'STAINS'
;

--2.2.3
/*
Lister les sportifs n'ayant pas de conseiller
*/
SELECT
    Nom
    ,Prenom
FROM Sportifs
WHERE IdSportifConseiller IS null
;

--2.3 Projection

--2.3.1
/*
Lister les sports pratiqués (uniquement le libellé de chaque sport)
*/
SELECT
    Libelle
FROM Sports
;

--2.3.2
/*
Lister les différentes valeurs de Sexe possible
*/
SELECT
    DISTINCT Sexe
FROM Sportifs
;

--3 Calculs et fonctions

--3.1 Calcul arithmétiques

--3.1.1
/*
Afficher en heure la durée de chaque séance (stockée en minute dans la table)
*/
SELECT
    Duree/60
FROM Seances
;

--3.1.2
/*
Convertir la surface (en m2 dans la table) en pieds carrés (voir la définition) des gymnases de "Pierrefitte"
*/
SELECT
    Surface / 0.09290304
FROM Gymnases
;

--3.2 Fonctions sur chaines de caractères

--3.2.1
/*
Concaténer le nom des sportifs avec la première lettre du prénom suivie d'un point, le tout en minuscules (par exemple "jollois f.")
*/
SELECT
    Nom
    ,Prenom
    ,LOWER(Nom || '.' || SUBSTR(Prenom, 1 , 1))
FROM Sportifs
;

--3.2.2
/*
Afficher les gymnases situées sur une place (cf Adresse)
*/
SELECT
    NomGymnase
    ,Adresse
FROM Gymnases
WHERE Adresse LIKE '%place%'
;

--3.3 Fonctions sur les dates

--3.3.1
/*
Donner la date du jour
*/
SELECT
    DATE('now')

--3.3.2
/*
Donner le jour de la semaine du 1er janvier de l'année de naissance de chaque sportif
*/
SELECT
    DATE('now') - Age
    ,STRFTIME('%w',DATE('now') - Age)
FROM Sportifs
;

--3.4 Traitement conditionnel

--3.4.1
/*
Afficher une nouvelle variable nommée Civilite, qui prendra "M." pour les hommes et "Mme" pour les femmes
*/
SELECT
    Sexe
    ,CASE Sexe
            WHEN 'M' THEN 'Monsieur'
            WHEN 'm' THEN 'Monsieur'
            ELSE 'Madame'
        END AS Civilite
FROM Sportifs
;

--3.4.2
/*
Afficher une nouvelle variable TypeGymnase, qui prendra comme valeur "petit" si la surface est inférieure strictement à 400 m2, "moyen" si elle est entre 400 et 550 m2, et "grand" si elle est strictement supérieure à 550 m2
*/
SELECT
    Surface
    ,CASE
            WHEN Surface < 400 THEN 'Petit'
            WHEN Surface < 550 THEN 'Moyen'
            ELSE 'Grand'
        END AS TypeGymnase
FROM Gymnases
;


--4 Agrégats

--4.1 Dénombrement

--4.1.1
/* Compter le nombre de sportifs */
SELECT
    COUNT(IdSportif)
FROM Sportifs
;

--4.1.2
/* Compter le nombre de sportifs ayant un conseiller */
SELECT
    COUNT(IdSportif)
FROM Sportifs
WHERE IdSportifConseiller IS NOT null
;

--4.1.3
/* Compter le nombre de villes distinctes */
SELECT
    COUNT(DISTINCT Ville)
FROM Gymnases
;

--4.2 Calculs statistiques simples

--4.2.1
/* Calculer la surface moyenne des gymnases */
SELECT
    AVG(Surface)
FROM Gymnases
;

--4.2.2
/* Calculer l'âge moyen, l'âge minimum et l'âge maximum des sportifs */
SELECT
    AVG(Age)
    ,MIN(Age)
    ,MAX(Age)
FROM Sportifs
;

--4.3 Agrégats selon attribut(s)

--4.3.1
/* Calculer le nombre de sportifs par sexe, ainsi que l'âge moyen */
SELECT
    Sexe
    ,AVG(Age)
    ,COUNT(IdSportif)
FROM Sportifs
GROUP BY Sexe
;

--4.3.2
/* Calculer pour chaque ville la surface du plus petit et du plus grand gymnase */
SELECT
    Ville
    ,MIN(Surface)
    ,MAX(Surface)
FROM Gymnases
GROUP BY Ville
;

--4.4 Restriction sur agrégats
/* Lister les villes ayant plus de 5 gymnases, dans l'ordre décroissant du nombre de gymnases */
SELECT
    Ville
    ,COUNT(NomGymnase) AS nb_gymnase
FROM Gymnases
GROUP BY Ville
HAVING COUNT(NomGymnase) > 2
ORDER BY nb_gymnase DESC
;

--5 Exercices complémentaires

--5.1 
/* Lister les 5 sportifs masculins les plus âgés */
SELECT
    Nom
    ,Sexe
    ,Age
FROM Sportifs
WHERE Sexe LIKE 'M'
    OR Sexe LIKE 'm'
ORDER BY Age DESC
LIMIT 5
;

--5.2
/* Lister les villes dans lesquelles il y a des gymnases d'au moins 500 m2 */
SELECT
    Ville
    ,Surface
FROM Gymnases
GROUP BY 
    Ville
    ,Surface
HAVING Surface > 500
;

--5.3 
/* Concaténer le nom des sportifs avec la première lettre du prénom suivie d'un point, en tenant compte des prénoms composés, suivi de l'année de naissance (par exemple "JOLLOIS F.-X. - 1977") */
SELECT
    Nom
    ,Prenom
    ,DATE('now') - Age
    ,UPPER(Nom || ' ' || SUBSTR(Prenom, 1, 1) || '.' || ' - ' || (DATE('now') - Age))
FROM Sportifs
;

--5.4
/* Lister les identifiants de sports ayant le plus de joueur */
SELECT
    Nom
    ,Prenom                     -- INCOMPLET
    ,DATE('now') - Age
    ,UPPER(Nom || ' ' || SUBSTR(Prenom, 1, 1) || '.' || ' - ' || (DATE('now') - Age))
FROM Sportifs
;

--5.5
/* Donner le nombre de sportifs pour la répartition "junior" (de 20 à 24 ans), "senior 1" (de 25 à 30), "senior 2" (de 31 à 45) */
SELECT
    COUNT(IdSportif)
    ,CASE
            WHEN Age <= 24 THEN 'Junior'
            WHEN Age <= 30 THEN 'Senior_1'
            ELSE 'Senior_2'
        END AS Categories
FROM Sportifs
GROUP BY Categories
;

--5.6
/* Sachant des les heures de début de séances sont stockées en réel, avec 19.3 pour "19h30" par exemple, calculer l'heure de fin de chaque séance */
SELECT 
    Horaire
    ,Duree                  -- A CONTROLER
    ,Duree / 60
    ,JULIANDAY(Duree/60)
    ,Horaire + Duree / 60
FROM Seances












