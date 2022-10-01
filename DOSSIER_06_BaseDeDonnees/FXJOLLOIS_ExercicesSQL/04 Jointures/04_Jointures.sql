--1.1
/* Récupérer les informations des fournisseurs pour chaque produit */
SELECT * 
FROM produit
    NATURAL JOIN fournisseur
;

--1.2
/* Afficher les informations des commandes du client "Lazy K Kountry Store" */
SELECT * 
FROM Client
    NATURAL JOIN Commande
WHERE Societe = 'Lazy K Kountry Store'
;

--1.3
/* Afficher le nombre de commande pour chaque messager (en indiquant son nom) */
SELECT 
    NomMess
    ,COUNT(NoCom)
FROM Messager
    NATURAL JOIN Commande
GROUP BY 
    NomMess
;

--2.1
/* Récupérer les informations des fournisseurs pour chaque produit, avec une jointure interne */
SELECT 
    Fournisseur.*
    ,NomProd
FROM Fournisseur
    INNER JOIN Produit USING (NoFour)
;

--2.2
/* Afficher les informations des commandes du client "Lazy K Kountry Store", avec une jointure interne */
SELECT 
    Commande.*
    ,Societe
FROM Commande   
    INNER JOIN Client USING (CodeCli)
WHERE Societe = 'Lazy K Kountry Store'
;

--2.3
/* Afficher le nombre de commande pour chaque messager (en indiquant son nom), avec une jointure interne */
SELECT
    NomMess
    ,COUNT(DISTINCT NoCom)
FROM Messager AS M
    INNER JOIN Commande AS C ON M.NoMess = C.NoMess
GROUP BY
    NomMess
;

--2.4
/* Afficher pour chaque employé le nom et le prénom de son responsable */
SELECT
    E1.NoEmp
    ,E1.Nom
    ,E1.Prenom
    ,E1.RendCompteA
    ,E2.Nom
    ,E2.Prenom
FROM Employe AS E1
    LEFT JOIN Employe AS E2 ON E2.NoEmp = E1.RendCompteA
;

--3.1
/* Compter pour chaque produit, le nombre de commandes où il apparaît, même pour ceux dans aucune commande */
SELECT
    Produit.Refprod
    ,Nomprod
    ,COUNT(Nocom)
FROM Produit
    LEFT JOIN DetailCommande ON Produit.Refprod = DetailCommande.Refprod
GROUP BY 
    Produit.Refprod
    ,Nomprod
;

--3.2
/* Lister les produits n'apparaissant dans aucune commande */
SELECT
    Produit.Refprod
    ,Nomprod
    ,COUNT(Nocom) AS nb_com
FROM Produit
    LEFT JOIN DetailCommande ON Produit.Refprod = DetailCommande.Refprod
GROUP BY 
    Produit.Refprod
    ,Nomprod
HAVING nb_com == 0
;

--3.3
/* Existe-t'il un employé n'ayant enregistré aucune commande ? */
SELECT
    Em.NoEmp
    ,Nom
    ,Prenom
    ,COUNT(NoCom) AS nb_com
FROM Employe AS Em
    LEFT JOIN Commande AS Co ON Em.NoEmp = Co.NoEmp
GROUP BY 
    Em.NoEmp
    ,Nom
    ,Prenom
HAVING nb_com == 0
;

--4.1
/* Récupérer les informations des fournisseurs pour chaque produit, avec jointure à la main */
/*
SELECT
    F.*
    ,Nomprod
FROM Fournisseur AS F
    INNER JOIN Produit AS P ON F.NoFour = P.NoFour
;
*/
SELECT
    F.*
    ,Nomprod
FROM Fournisseur AS F, Produit AS P
WHERE F.NoFour = P.NoFour
;

--4.2
/* Afficher les informations des commandes du client "Lazy K Kountry Store", avec jointure à la main */
SELECT
    Societe
    ,Commande.*
FROM Client AS Cl, Commande AS Co
WHERE Cl.Codeli = Co.CodeCli
GROUP BY 
    Societe
    ,Commande
HAVING Societe = "Lazy K Kountry Store"

--4.3
/* Afficher le nombre de commande pour chaque messager (en indiquant son nom), avec jointure à la main */
SELECT
    NomMess
    ,COUNT(NoCom)
FROM Messager AS M, Commande AS C
WHERE M.NoMess = C.NoMess
GROUP BY
    NomMess
;

--5 Exercices complémentaires

--5.1
/* Compter le nombre de produits par fournisseur */
SELECT
    Societe
    ,COUNT(NomProd) AS nb_produits
FROM Fournisseur AS F
    LEFT JOIN Produit AS P ON F.NoFour = P.NoFour
GROUP BY Societe

--5.2
/* Compter le nombre de produits par pays d'origine des fournisseurs */
SELECT
    DISTINCT Pays
    ,COUNT(Refprod)
FROM Fournisseur AS F
    LEFT JOIN Produit AS P ON F.NoFour = P.NoFour
GROUP BY Pays
;

--5.3
/* Compter pour chaque employé le nombre de commandes gérées, même pour ceux n'en ayant fait aucune */
SELECT
    Nom
    ,Prenom
    ,COUNT(NoCom) AS 'Nombre de commandes'
FROM Employe AS E
    LEFT JOIN Commande AS C ON E.NoEmp = C.NoEmp
GROUP BY Nom, Prenom
;

--5.4
/* Afficher le nombre de pays différents des clients pour chaque employe (en indiquant son nom et son prénom) */
SELECT
    Nom
    ,Prenom
    ,COUNT(DISTINCT PaysLiv)
FROM Employe AS E
    LEFT JOIN Commande AS C ON E.NoEmp = C.NoEmp
GROUP BY
    Nom
    ,Prenom 
;

--5.5
/* Compter le nombre de produits commandés pour chaque client pour chaque catégorie */
SELECT
    NomCateg
    ,Societe
    ,COUNT(RefProd)
FROM Categorie AS Ca
    LEFT JOIN Produit AS Pr ON Ca.CodeCateg = Pr.CodeCateg
    NATURAL JOIN DetailCommande
    NATURAL JOIN Commande
    NATURAL JOIN Client
GROUP BY 
    NomCateg
    ,Societe
;










