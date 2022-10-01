Console.WriteLine("Hello, World!");

// RECHERCHER UNE LETTRE DANS UNE PHRASE

// VARIABLES

string phrase;
string end;
char lettre;
char[] tableau;
int occurence = 0;

// DEBUT PROGRAMME



// Recherche de la lettre
do
{
    // Récupération des données utilisateur.
    Console.WriteLine("Veuillez saisir votre phrase");
    phrase = Console.ReadLine();

    tableau = phrase.ToCharArray();

    if (tableau.Length < 2)
    {
        Console.WriteLine("Veuillez saisir au moins un caractère !");
    }
    else if (tableau[tableau.Length - 1] != '.')
    {
        Console.WriteLine("Veuillez terminer votre phrase par un point !");
    }
} while (tableau.Length < 2 || tableau[tableau.Length - 1] != '.');


Console.WriteLine("Veuillez saisir votre lettre");
lettre = char.Parse(Console.ReadLine());
for (int i = 0; i < tableau.Length - 1; i++)
{
    if (tableau[i] == lettre)
    {
        occurence++;
    }
}

// Affichage du résultat.
Console.WriteLine("La lettre " + lettre + " apparait " + occurence + " fois dans la phrase.");
