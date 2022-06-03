// VARIABLES

string phrase;
string phrase_comparaison;
int compteur = 0;
bool est_palindrome = true;

char[] tableau_phrase = new char[] { };
string[] tableau_caractere_indesirable = new string[] { "@", ",", ".", ";", "'", " " };

// DEBUT PROGRAMME

// On vérifie d'abord que la phrase comporte au moins un caractère et est terminée par un point.
do
{
    Console.WriteLine("Veuillez saisir votre phrase avec au moins un caractère et terminée par un point : ");
    phrase = Console.ReadLine();
    tableau_phrase = phrase.ToCharArray();

    if (tableau_phrase.Length == 0)
    {
        tableau_phrase = " ".ToCharArray();
        Console.WriteLine("Votre phrase doit contenir au moins un caractère.");
    }
    else
    {
        if (tableau_phrase[0] == '.')
        {
            Console.WriteLine("Votre phrase doit contenir au moins un caractère.");
        }
        else
        {
            if (tableau_phrase[tableau_phrase.Length - 1] != '.')
            {
                Console.WriteLine("Votre phrase doit se terminer par un point.");
            }
        }
    }
} while ((tableau_phrase[tableau_phrase.Length - 1] != '.') || (tableau_phrase.Length < 2));

// On supprime les caractères indésirables.
//foreach (var caractere_indesirable in tableau_caractere_indesirable)
//{
//    phrase = phrase.Replace(caractere_indesirable, string.Empty);
//}

// On converti les majuscules en minuscules dans la phrase.
phrase_comparaison = phrase.ToUpper();
tableau_phrase = phrase_comparaison.ToCharArray();

// On compare la première et l'avant dernière lettre pour voir si elles sont identiques.
// Puis la deuxième et l'avant-avant dernière et ainsi de suite jusqu'à arriver au milieu de la phrase.
do
{
    if (tableau_phrase[compteur] == tableau_phrase[tableau_phrase.Length - 2 - compteur])
    {
        est_palindrome = true;
        compteur++;
    }
    else
    {
        est_palindrome = false;
    }
} while ((tableau_phrase[compteur] < tableau_phrase[tableau_phrase.Length - 2 - compteur]) && (est_palindrome == true));

// On affiche le résultat.
if (est_palindrome == true)
{
    Console.WriteLine("La phrase est un palindrome.");
}
else
{
    Console.WriteLine("La phrase n'est pas un palindrome.");
}