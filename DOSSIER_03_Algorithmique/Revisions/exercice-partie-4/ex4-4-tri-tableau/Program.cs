// EXERCICE 4.4 TRI D'UN TABLEAU

// VARIABLES

int[] tableau = new int[] { 128, 64, 8, 512, 16, 32, 256 };
int temporaire;
// DEBUT PROGRAMME


// Ordonner le tableau.
for (int i = 0; i < tableau.Length; i++)
{
    for (int j = i; j < tableau.Length; j++)
    {
        if (tableau[j] < tableau[i])
        {
            temporaire = tableau[j];
            tableau[j] = tableau[i];
            tableau[i] = temporaire;
        }
    }
}

// Affichage du tableau ordonné.
for (int i = 0; i < tableau.Length; i++)
{
    Console.WriteLine(" " + tableau[i] + " ");
}