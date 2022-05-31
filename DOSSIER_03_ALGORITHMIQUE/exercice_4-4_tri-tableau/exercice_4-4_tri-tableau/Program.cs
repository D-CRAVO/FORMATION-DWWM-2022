// VARIABLES

string longueur_tableau_string;

int longueur_tableau;
int compteur_tableau;
int compteur_1;
int compteur_2;
int temporaire;

// DEBUT PROGRAMME

// On demande à l'utilisateur la longueur du tableau à remplir.

/*
Source : https://www.developpez.net/forums/d1483985/dotnet/langages/csharp/test-nombre-entier-reel/
Console.WriteLine("Entrez votre saisie : ");
string saisie = Console.ReadLine();
int monInt;
while (true)
{
    int.TryParse(saisie, out monInt);
    if (saisie == "0" || monInt != 0)
        break;

    Console.WriteLine("Vous n'avez pas saisi de numérique, veuillez recommencer");
    saisie = Console.ReadLine();
}

Console.WriteLine("Vous avez saisi : " + saisie);
*/


do
{
    longueur_tableau_string = Console.ReadLine();

    int.TryParse(longueur_tableau_string, out longueur_tableau);
} while (true);


do
{
    Console.Write("Veuillez saisir la longueur du tableau (nombre entier >0) : ");
    longueur_tableau = int.Parse(Console.ReadLine());
} while (longueur_tableau < 1);


int[] tableau_origine = new int[longueur_tableau];
int[] tableau_trie = tableau_origine;

// On demande à l'utilisateur de remplir le tableau.
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    Console.Write("Veuillez entrer la valeur " + (compteur_tableau + 1 )+ " du tableau (nombre entier) : ");
    tableau_origine[compteur_tableau] = int.Parse(Console.ReadLine());
}

// On affiche le tableau rempli par l'utilisateur.
Console.WriteLine();
Console.WriteLine("On affiche le tableau rempli par l'utilisateur.");
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    Console.WriteLine("La valeur d'indice " + compteur_tableau + " est : " + tableau_origine[compteur_tableau]);
}

// Tri du tableau.
for (compteur_1 = 0; compteur_1 < (longueur_tableau); compteur_1++)
{
    for (compteur_2 = 0; compteur_2 < longueur_tableau; compteur_2++)
    {
        if (tableau_trie[compteur_1] < tableau_trie[compteur_2])
        {
            temporaire = tableau_trie[compteur_2];
            tableau_trie[compteur_2] = tableau_trie[compteur_1];
            tableau_trie[compteur_1] = temporaire;
        }
    }
}

// Affichage du tableau trié.
Console.WriteLine();
Console.WriteLine("Le nouveau tableau trié donne :");
for ( compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
        Console.WriteLine("La valeur du tableau pour l'indice " + compteur_tableau + " est : " + tableau_trie[compteur_tableau]);
}

// FIN PROGRAMME