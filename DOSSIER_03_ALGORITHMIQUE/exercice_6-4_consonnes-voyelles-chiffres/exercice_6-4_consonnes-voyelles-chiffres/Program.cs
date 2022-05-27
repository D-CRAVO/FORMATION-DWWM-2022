// EXERCICE 6.4 DENOMBRER LES LETTRES DE L'ALPHABET

// VARIABLES

char[] tableau_consonnes = new char[] { b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, w, x, z };
char[] tableau_voyelles = new char[] { a, e, i, o, u, y };
char[] tableau_chiffres = new char[] { 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 };
char[] tableau_phrase = new char[] { };

string phrase;

int compteur_1;
int compteur_2;
int compteur_consonnes;
int compteur_voyelles;
int compteur_chiffres;
int somme_chiffres = 0;

double moyenne_chiffres;

// DEBUT PROGRAMME

do
{
    Console.WriteLine("Veuillez saisir votre phrase (100 caractères minimum) : ");
    phrase = Console.ReadLine();
} while (phrase.Length >= 100);

for (compteur_1 = 0; compteur_1 < phrase.Length; compteur_1++)
{
    tableau_phrase = phrase.CharToArray();

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
            somme_chiffres = somme_chiffres + tableau_chiffres[compteur_2];
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
