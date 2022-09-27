Console.WriteLine("Limite");

// EXERCICE 3.2 CONTROLER LA SAISIE AVEC LIMITE

// VARIABLES
string mdp = "formation";
string mdp_saisi = "";
string end = "En attente";
int essai = 0;

// DEBUT PROGRAMME

// Récupérer la saisie utilisateur et traitement.
do
{
    Console.Write("Veuillez saisir votre mot de passe : ");
    mdp_saisi = Console.ReadLine();

    if (mdp_saisi == mdp)
    {
        essai = 3;
        end = "Vous êtes connecté !";
    }
    else
    {
        essai++;
        end = "Votre compte est bloqué !";
    }
} while (essai < 3);

// Affichage du résultat.
Console.WriteLine(end);

