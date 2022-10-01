Console.WriteLine("Saisie");

// EXERCICE 3.1 CONTROLER LA SAISIE

// VARIABLES
string prenom ="";

// DEBUT PROGRAMME

// Récupération des données utilisateur.
do
{
    Console.WriteLine("Veuillez saisir votre prénom : ");
    prenom = Console.ReadLine();
} while (prenom.Length <= 2);

// Affichage du résultat.
Console.WriteLine("Bonjour " + prenom);