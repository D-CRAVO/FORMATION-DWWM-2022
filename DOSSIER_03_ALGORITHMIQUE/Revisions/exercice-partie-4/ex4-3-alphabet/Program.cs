// EXERCICE 4.3 DENOMBRER LES LETTRES DE L'ALPHABET DANS UN TABLEAU

// VARIABLES

string alphabet = "";
string phrase;
int longueur_phrase = 5;
char a = 'a';

char[] tableau_alphabet = new char[26];
char[] tableau_phrase;
int[] tableau_occurences = new int[tableau_alphabet.Length];

// DEBUT PROGRAMME

// Récupération des données utilisateur.
do
{
    Console.WriteLine("Veuillez saisir votre phrase de plus de " + longueur_phrase + " : ");
    phrase = Console.ReadLine();
} while (phrase.Length < longueur_phrase);
tableau_phrase = phrase.ToCharArray();

// Remplissage du tableau alphabet.
for (int i = 0; i < 26; i++)
{
    alphabet += a++;
}
tableau_alphabet = alphabet.ToCharArray();

// Comparaison des éléments de la phrase et de l'alphabet.
for (int i = 0; i < tableau_alphabet.Length; i++)
{
    for (int j = 0; j < tableau_phrase.Length; j++)
    {
        if (tableau_alphabet[i] == tableau_phrase[j])
        {
            tableau_occurences[i]++;
        }
    }
}

// Affichage des résultats

for (int i = 0; i < tableau_alphabet.Length; i++)
{
    if (tableau_occurences[i] != 0)
    {
        Console.WriteLine("La lettre " + tableau_alphabet[i] + " apparait " + tableau_occurences[i] + " fois.");
    }
}