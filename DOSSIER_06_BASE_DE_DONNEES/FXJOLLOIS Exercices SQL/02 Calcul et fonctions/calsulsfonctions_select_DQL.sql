-- 1
/*
La table DetailCommande contient l'ensemble des lignes d'achat de chaque commande. Calculer, pour la commande numéro 10251, pour chaque produit acheté dans celle-ci, le montant de la ligne d'achat en incluant la remise (stockée en proportion dans la table). Afficher donc :
- le prix unitaire, 
- la remise, 
- la quantité, 
- le montant de la remise, 
- le montant à payer pour ce produit
*/

SELECT
    prixunit
    ,remise
    ,qte
    ,(qte * prixunit * remise) AS montant_remise
    ,(qte * prixunit - qte * prixunit * remise) AS montant_paye
FROM detailcommande
WHERE nocom = 10251
;

--2
/*
Dans une même requête, sur la table Client :
Concaténer les champs Adresse, Ville, CodePostal et Pays dans un nouveau champ nommé Adresse complète, pour avoir :
Adresse, CodePostal Ville, Pays
Extraire les deux derniers caractères des codes clients
Mettre en minuscule le nom des sociétés
Remplacer le terme "marketing" par "mercatique" dans la fonction des contacts
Indiquer la présence du terme "Chef" dans la fonction du contact
*/

SELECT
    adresse || ',' || codepostal || ' ' || ville || ',' || pays AS 'Adresse complète'
    ,SUBSTR (codecli,3,2) AS 'Sous chaine'
    ,UPPER (societe)
    ,REPLACE(fonction, 'marketing', 'mercatique')
    ,INSTR (fonction, 'Chef')
FROM client

--3
--3.1
/*
Calculer pour chaque commande 
le jour de la semaine, le numéro de semaine dans l'année et le mois
*/
SELECT
    STRFTIME('%w', datecom)
    ,STRFTIME('%W', datecom)
    ,STRFTIME('%m', datecom)
FROM commande

--3.2
/*
Lister les commandes ayant eu lieu un dimanche
*/
SELECT
    nocom
    ,STRFTIME('%w', datecom)
FROM commande
GROUP BY nocom
HAVING (STRFTIME('%w', datecom)) = '0'

--3.3
/*
Calculer le nombre de jours entre la date de la commande (DateCom) 
et la date butoir de livraison (ALivAvant), pour chaque commande
*/
SELECT
   datecom
   ,alivavant
   ,(STRFTIME('%s', alivavant) - STRFTIME('%s', datecom))/86400 AS 'Délais'
FROM commande

--3.4
/*
On souhaite aussi contacter les clients 1 an, 1 mois et 
1 semaine après leur commande. Calculer les dates correspondantes 
pour chaque commande
*/
SELECT 
    datecom
    ,DATE(DATE(DATE(datecom, '+1 years'),'+1 month'), '+7 days')
FROM commande

--4
--4.1
/*
A partir de la table Produit, afficher "Produit non disponible" 
lorsque l'attribut Indisponible vaut 1, et "Produit disponible" sinon.
*/

SELECT 
    Nomprod
    ,Indisponible
    ,CASE Indisponible
            WHEN 0 THEN 'Produit non disponible'
            ELSE 'Produit disponible'
        END AS 'Disponiblite'
FROM produit
;

--4.2
/*
Dans la table DetailCommande, indiquer les infos suivantes en fonction de la remise
si elle vaut 0 : "aucune remise"
si elle vaut entre 1 et 5% (inclus) : "petite remise"
si elle vaut entre 6 et 15% (inclus) : "remise modérée"
sinon :"remise importante"
*/
SELECT 
   Nocom
   ,Refprod
   ,PrixUnit
   ,Qte
   ,Remise
   ,CASE
            WHEN Remise <= 0 THEN 'Aucune remise'
            WHEN Remise <= 0.05 THEN 'Petite remise'
            WHEN Remise <= 0.15 THEN 'Remise modérée'
            ELSE 'Remise importante'
        END AS Commentaire
FROM DetailCommande
;

--4.3
/*
Indiquer pour les commandes envoyées si elles ont été envoyées en retard 
(date d'envoi DateEnv supérieure (ou égale) à la date butoir ALivAvant) ou à temps
*/
SELECT 
   DateCom
   ,ALivAvant
   ,DateEnv
   ,CASE
            WHEN DateEnv > ALivAvant THEN 'En Retard'
            ELSE 'A temps'
        END AS Commentaire
FROM Commande
;

--5 Exercices complémentaires
--5.1
/*
Récupérer l'année de naissance et l'année d'embauche des employés
*/


--5.2
/*
Lister les commandes ayant eu lieu un dimanche
*/

SELECT 
    NoCom
    ,DateCom
    ,STRFTIME('%w', DateCom)
FROM commande
GROUP BY 
    NoCom
    ,DateCom
HAVING STRFTIME('%w', DateCom) = '0'
;

--5.3
/*
Calculer le délai d'envoi (en jours) pour les commandes dont l'envoi est après la date butoir, ainsi que le nombre de jours de retard
*/
SELECT 
    DateCom
    ,ALivAvant
    ,DateEnv
    ,(STRFTIME('%s', DateEnv) - STRFTIME('%s', DateCom))/86400 AS 'Délais'
    ,(STRFTIME('%s', DateEnv) - STRFTIME('%s', ALivAvant))/86400 AS 'Retard'
FROM commande
WHERE DATE(DateEnv) > DATE(ALivAvant)
;

--5.4
/*
Rechercher les sociétés clientes, dont le nom de la société contient le nom du contact de celle-ci
*/
SELECT 
    Societe
    ,Contact
FROM client
WHERE INSTR(Societe, Contact)
;






