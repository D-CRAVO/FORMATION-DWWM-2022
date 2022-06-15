// EXERCICE 4.3 DENOMBRER LES LETTRES DE L'ALPHABET DANS UN TABLEAU

// VARIABLES

string phrase;
int longueur_phrase = 5;

// DEBUT PROGRAMME

do
{
    // Récupération des données utilisateur.
    Console.WriteLine("Veuillez saisir votre phrase de plus de " + longueur_phrase + " : ");
    phrase = Console.ReadLine();
} while (phrase.Length < longueur_phrase);

