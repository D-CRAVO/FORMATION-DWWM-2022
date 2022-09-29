Console.WriteLine("Jeu de la fourchette");

// EXERCICE 3.6 JEU DE LA FOURCHETTE

// VARIABLES

int nombre_mystere;
int nombre_saisi;
int compteur = 0;
int nombre_min = 0;
int nombre_max = 100;
int fourchette_basse = nombre_min;
int fourchette_haute = nombre_max;

// PROGRAMME

// Choix du nombre mystère.
Random aleatoire = new Random();
nombre_mystere = aleatoire.Next(nombre_min, nombre_max);

do
{
    // Indications pour l'utilisateur.
    Console.WriteLine("Le chiffre mystère est compris entre " + fourchette_basse + " et " + fourchette_haute + ".");

    // Acquisition des données utilistateur.
    Console.Write("Veuillez saisir votre nombre : ");
    nombre_saisi = int.Parse(Console.ReadLine());

    // Recherche du nombre mystère.
    if (nombre_saisi > nombre_mystere)
    {
        fourchette_haute = nombre_saisi;
        compteur++;
    }
    else
    {
        fourchette_basse = nombre_saisi;
        compteur++;
    }

} while (nombre_saisi != nombre_mystere);

// Affichage du résultat final.
Console.WriteLine("Vous avez trouvé en " + (compteur + 1) + " essais.");