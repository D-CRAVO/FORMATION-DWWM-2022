Console.WriteLine("Barnabé");

// EXERCICE 3.7 BARNABE FAIT SES COURSES

// VARIABLES

float somme_depart;
float somme;
int compteur = 0;

// PROGRAMME

// Récupération de la saisie utilisateur
Console.Write("Veuillez saisir le montant de départ : ");
somme_depart = float.Parse(Console.ReadLine());

// Calcul du nombre de magasins.
somme = somme_depart;
while (somme >= 1)
{
    somme = somme/2 - 1;
    compteur++;
} 

// Affichage du résultat
Console.WriteLine("Barnabé a visité " + (compteur + 1) + " magasins.");

// JEU D'ESSAI

// 1000 donne 10 magasins