--1.1
/*
Calculer le nombre d'employés qui sont "Représentant(e)"
*/
SELECT
    COUNT(NoEmp)
FROM Employe
WHERE Fonction LIKE ('%Représentant(e)%')
;

--1.2
/*
Calculer le nombre de produits de moins de 50 euros
*/
SELECT
    COUNT(RefProd)
FROM Produit
WHERE PrixUnit < 50
;

--1.3
/*
Calculer le nombre de produits de catégorie 2 et avec plus de 10 unités en stocks
*/
SELECT
    COUNT(RefProd)
    ,CodeCateg
FROM produit
WHERE CodeCateg = 2
;

--1.4
/*
Calculer le nombre de produits de catégorie 1, des fournisseurs 1 et 18
*/
SELECT
    COUNT(NoFour)
    ,CodeCateg
FROM produit
WHERE CodeCateg = 1
    AND (NoFour = 1 OR NoFour = 18 )
;

--1.5
/*
Calculer le nombre de pays différents de livraison
*/
SELECT
    COUNT(DISTINCT PaysLiv)
FROM Commande
;

--1.6
/*
Calculer le nombre de commandes réalisées le 28/03/2016.
*/
SELECT
    COUNT(DateCom)
FROM Commande
WHERE DATE(DateCom) = '2016-03-28'
;

--2.1
/*
Calculer le coût moyen du port pour les commandes du client dont le code est 
"QUICK" (attribut CodeCli)
*/
SELECT 
    AVG(Port)
FROM Commande
WHERE CodeCli LIKE ('QUICK')
;

--2.2
/*
Calculer le coût du port minimum et maximum des commandes
*/
SELECT 
    MIN(Port)
    ,MAX(Port)
FROM Commande
;

--2.3
/*
Pour chaque messager (par leur numéro : 1, 2 et 3), donner le montant total des frais de port leur correspondant
il faut faire 3 requêtes différentes donc
*/
SELECT 
    NoMess
    ,SUM(Port)
FROM Commande
GROUP BY NoMess

--3.1
/*
Donner le nombre d'employés par fonction
*/
SELECT
    Fonction
    ,Count(Nom)
FROM Employe
GROUP BY 
    Fonction
;

--3.2
/*
Donner le montant moyen du port par messager
*/
SELECT
    NoMess
    ,AVG(Port)
FROM Commande
GROUP BY
    NoMess
;

--3.3
/*
Donner le nombre de catégories de produits fournis par chaque fournisseur
*/
SELECT
    NoFour
    ,COUNT(DISTINCT CodeCateg)
FROM Produit
GROUP BY    
    NoFour
;

--3.4
/*
Donner le prix moyen des produits pour chaque fournisseur et chaque catégorie de produits fournis par celui-ci
*/
SELECT
    NoFour
    ,CodeCateg
    ,AVG(PrixUnit)
FROM Produit
GROUP BY 
    NoFour
    ,CodeCateg
;

--4.1
/*
Lister les fournisseurs ne fournissant qu'un seul produit
*/
SELECT
    NoFour
    ,COUNT(Nomprod)
FROM Produit
GROUP BY 
    NoFour
HAVING COUNT(Nomprod) = 1
;

--4.2
/*
Lister les catégories dont les prix sont en moyenne supérieurs strictement à 150 euros
*/
SELECT
    CodeCateg
    ,AVG(PrixUnit)
FROM Produit
GROUP BY 
    CodeCateg
HAVING AVG(PrixUnit) > 150
;

--4.3
/*
Lister les fournisseurs ne fournissant qu'une seule catégorie de produits
*/
SELECT
    NoFour
    ,COUNT(CodeCateg)
FROM Produit
GROUP BY 
    NoFour
HAVING COUNT(CodeCateg) = 1
;

--4.4
/*
Lister les fonctions pour lesquelles la moyenne d'âge des employés dépasse les 45 ans
*/
-- Absence de l'âge des employés

--5.1
/*
Donner la quantité totale commandée par les clients, pour chaque produit
*/

--5.2
/*
Donner les cinq clients avec le plus de commandes, triés par ordre décroissant
*/

--5.3
/*
Calculer le montant total des lignes d'achats de chaque commande, sans et avec remise sur les produits
*/

--5.4
/*
Pour chaque catégorie avec au moins 10 produits, calculer le montant moyen des prix
*/

--5.5
/*
Donner le numéro de l'employé ayant fait le moins de commandes
*/


