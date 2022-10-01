-- 1
-- Obtenir l’utilisateur ayant le prénom “Muriel” et le mot de passe “test11”, 
-- sachant que l’encodage du mot de passe est effectué avec l’algorithme Sha1.

SELECT 
	nom
	,prenom
	,email
	,ville
FROM client
WHERE prenom LIKE 'Muriel'
;

-- 2
-- Obtenir la liste de tous les produits qui sont présent sur plusieurs commandes.

SELECT 
	nom
	,commande_id
FROM commande_ligne
GROUP BY nom, commande_id
HAVING COUNT(commande_id) > 1
;