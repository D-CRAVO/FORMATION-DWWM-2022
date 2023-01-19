// EXERCICE 6.4 DENOMBRER LES LETTRES DE L'ALPHABET

// VARIABLES

char[] tableau_consonnes = new char[] { 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z' };
char[] tableau_voyelles = new char[] { 'a', 'e', 'i', 'o', 'u', 'y' };
char[] tableau_chiffres = new char[] { '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' };
char[] tableau_phrase = new char[] { };

string phrase;

int longueur_phrase = 10;
int compteur_1;
int compteur_2;
int compteur_consonnes = 0;
int compteur_voyelles = 0;
int compteur_chiffres = 0;

double somme_chiffres = 0;
double valeur_numerique;
double moyenne_chiffres;

// DEBUT PROGRAMME

// On demande à l'utilisateur de saisir une phrase de 100 caractères minimum.
// On boucle tant que ce n'est pas le cas.
do
{
    Console.WriteLine("Veuillez saisir votre phrase (" + longueur_phrase + " caractères minimum) : ");
    phrase = Console.ReadLine().ToLower();
} while (phrase.Length < longueur_phrase);
tableau_phrase = phrase.ToCharArray();

// On effectue la comparaison
for (compteur_1 = 0; compteur_1 < phrase.Length; compteur_1++)
{
    // On compte le nombre de consonnes dans la phrase.
    for (compteur_2 = 0; compteur_2 < tableau_consonnes.Length; compteur_2++)
    {
        if (tableau_phrase[compteur_1] == tableau_consonnes[compteur_2])
        {
            compteur_consonnes++;
        }
    }

    // On compte le nombre de voyelles dans la phrase.
    for (compteur_2 = 0; compteur_2 < tableau_voyelles.Length; compteur_2++)
    {
        if (tableau_phrase[compteur_1] == tableau_voyelles[compteur_2])
        {
            compteur_voyelles++;
        }
    }

    // On compte le nombre de chiffres dans la phrase.
    for (compteur_2 = 0; compteur_2 < tableau_chiffres.Length; compteur_2++)
    {
        if (tableau_phrase[compteur_1] == tableau_chiffres[compteur_2])
        {
            compteur_chiffres++;
            // Source : https://stackoverflow.com/questions/239103/convert-char-to-int-in-c-sharp
            /* This will convert it to an int:
            char foo = '2';
            int bar = foo - '0';
            This works because each character is internally represented by a number.The characters '0' to '9' 
            are represented by consecutive numbers, so finding the difference between the characters '0' and '2' 
            results in the number 2.*/
            valeur_numerique = tableau_chiffres[compteur_2] - '0';
            somme_chiffres += valeur_numerique;
        }
    }
}

Console.WriteLine("Il y a " + compteur_consonnes + " consonnes dans votre phrase.");
Console.WriteLine("Il y a " + compteur_voyelles + " voyelles dans votre phrase.");
Console.WriteLine("Il y a " + compteur_chiffres + " chiffres dans votre phrase.");

// On calcule la moyenne des chiffres dans la phrase.
if (compteur_chiffres == 0)
{
    compteur_chiffres = 1;
}
moyenne_chiffres = somme_chiffres / compteur_chiffres;
Console.WriteLine("La moyenne des chiffres est de : " + moyenne_chiffres);

// FIN PROGRAMME
