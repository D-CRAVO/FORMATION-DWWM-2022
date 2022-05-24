// VARIABLES
int nombre_joueur;
int nombre_ordinateur;
int difference = 0;
int compteur_joueur = 0;
int compteur_ordinateur = 0;

string end = "Traitement terminé";

// PROGRAMME

do
{
    // On récupère la valeur aléatoire de l'ordinateur 
    Random random = new Random();
    nombre_ordinateur = random.Next(0, 2);

    // On récupère la saisie de l'utilisateur 
    Console.WriteLine("Veuillez saisir votre choix(0, 1, 2) ou - 1 pour quitter: ");
    nombre_joueur = int.Parse(Console.ReadLine());

    // On vérifie si l'utilisateur veut sortir en saisissant un nombre négatif.
    if (nombre_joueur>= 0)
    {
        difference = Math.Abs(nombre_joueur - nombre_ordinateur);
    }
    else
    {
        Console.WriteLine(end);
        break;
    }

    // On compare les deux nombres pour savoir qui marque ou non un point. 
    if (difference == 2)
    {
        if (nombre_joueur > nombre_ordinateur)
        {
            compteur_joueur++;
        }
        else
        {
            compteur_ordinateur++;
        }
    }
    if (difference == 1)
    {
        if (nombre_joueur < nombre_ordinateur)
        {
            compteur_joueur++;
        }
        else
        {
            compteur_ordinateur++;
        }
    }
} while ((nombre_joueur >= 0) || (compteur_joueur >= 5) || (compteur_ordinateur >= 5));

