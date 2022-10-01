-- 1
/*
La table DetailCommande contient l'ensemble des lignes d'achat de chaque commande. 
Calculer, pour la commande numéro 10251, pour chaque produit acheté dans celle-ci, 
le montant de la ligne d'achat en incluant la remise (stockée en proportion dans la table).
Afficher donc :
- le prix unitaire, 
- la remise, 
- la quantité, 
- le montant de la remise, 
- le montant à payer pour ce produit
*/
SELECT 
    NoCom
    ,PrixUnit
    ,Remise
    ,Qte
    ,ROUND(Qte * PrixUnit * Remise, 2) AS MontantRemise
    ,Qte * PrixUnit AS Montant
    ,ROUND(Qte * PrixUnit * (1-Remise),2) AS MontantPaye
FROM DetailCommande
WHERE NoCom = '10251'



--2
--2.1
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
    Adresse || ', ' || CodePostal || ' ' || Ville || ', ' || Pays AS 'Adresse complète'
FROM Client
;


--2.2
/*
Extraire les deux derniers caractères des codes clients
*/



--3
--3.1
/*
Calculer pour chaque commande 
le jour de la semaine, le numéro de semaine dans l'année et le mois
*/


--3.2
/*
Lister les commandes ayant eu lieu un dimanche
*/


--3.3
/*
Calculer le nombre de jours entre la date de la commande (DateCom) 
et la date butoir de livraison (ALivAvant), pour chaque commande
*/


--3.4
/*
On souhaite aussi contacter les clients 1 an, 1 mois et 
1 semaine après leur commande. Calculer les dates correspondantes 
pour chaque commande
*/


--4
--4.1
/*
A partir de la table Produit, afficher "Produit non disponible" 
lorsque l'attribut Indisponible vaut 1, et "Produit disponible" sinon.
*/



--4.2
/*
Dans la table DetailCommande, indiquer les infos suivantes en fonction de la remise
si elle vaut 0 : "aucune remise"
si elle vaut entre 1 et 5% (inclus) : "petite remise"
si elle vaut entre 6 et 15% (inclus) : "remise modérée"
sinon :"remise importante"
*/


--4.3
/*
Indiquer pour les commandes envoyées si elles ont été envoyées en retard 
(date d'envoi DateEnv supérieure (ou égale) à la date butoir ALivAvant) ou à temps
*/


--5 Exercices complémentaires
--5.1
/*
Récupérer l'année de naissance et l'année d'embauche des employés
*/


--5.2
/*
Lister les commandes ayant eu lieu un dimanche
*/



--5.3
/*
Calculer le délai d'envoi (en jours) pour les commandes dont l'envoi est après la date butoir, ainsi que le nombre de jours de retard
*/


--5.4
/*
Rechercher les sociétés clientes, dont le nom de la société contient le nom du contact de celle-ci
*/






