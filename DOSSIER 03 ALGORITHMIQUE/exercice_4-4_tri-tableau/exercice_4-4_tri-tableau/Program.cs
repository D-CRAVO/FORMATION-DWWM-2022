// VARIABLES

bool ok = false;

uint longueur_tableau;

int compteur_tableau;
int compteur_1;
int compteur_2 = 0;

float temporaire;

// DEBUT PROGRAMME

// On demande à l'utilisateur la longueur du tableau à remplir.
do
{
    Console.Write("Veuillez saisir la longueur du tableau (nombre entier >0) : ");
    ok = uint.TryParse(Console.ReadLine(), out longueur_tableau);
    if (!ok)
    {
        Console.WriteLine("Le nombre saisi n'est pas correct");
    }
} while (!ok);

float[] tableau_origine = new float[longueur_tableau];
float[] tableau_trie = tableau_origine;

// On demande à l'utilisateur de remplir le tableau.
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    do
    {
        Console.Write("Veuillez entrer la valeur " + (compteur_tableau + 1) + " du tableau : ");
        ok = float.TryParse(Console.ReadLine().Replace(".", ","), out tableau_origine[compteur_tableau]);
        if (!ok)
        {
            //TryCatch
            Console.WriteLine("Le nombre saisi n'est pas correct");
        }
    } while (!ok);
}

// On affiche le tableau rempli par l'utilisateur.
Console.WriteLine();
Console.WriteLine("On affiche le tableau rempli par l'utilisateur.");
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    Console.WriteLine("La valeur d'indice " + compteur_tableau + " est : " + tableau_origine[compteur_tableau]);
}

// Tri du tableau.
for (compteur_1 = 0; compteur_1 < (tableau_trie.Length - 1); compteur_1++)
{
    for (compteur_2 = compteur_1; compteur_2 < tableau_trie.Length; compteur_2++)
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