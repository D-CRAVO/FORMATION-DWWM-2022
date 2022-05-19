// Déclaration des variables
int longueur_tableau;
int compteur_tableau;
int compteur_1;
int compteur_2;
int temporaire;

// Chercher comment affecter une longueur variable au tableau.
int[] tableau = new int[] {0,1,2,3,4,5,6};

// On demande à l'utilisateur la longueur du tableau à remplir.
do
{
    Console.Write("Veuillez saisir la longueur du tableau (nombre entier <= 7) : ");
    longueur_tableau = int.Parse(Console.ReadLine());
} while (longueur_tableau > 7);


// On demande à l'utilisateur de remplir le tableau.
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    Console.Write("Longueur du tableau : " + longueur_tableau + " -- " + "Valeur compteur : " + (compteur_tableau + 1) + " -- ");
    Console.Write("Veuillez entrer la valeur " + compteur_tableau + " du tableau (nombre entier) : ");
    tableau[compteur_tableau] = int.Parse(Console.ReadLine());
}

// On affiche le tableau rempli par l'utilisateur.
Console.WriteLine();
Console.WriteLine("On affiche le tableau rempli par l'utilisateur.");
for (compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
    Console.WriteLine("La valeur d'indice " + compteur_tableau + " est : " + tableau[compteur_tableau]);
}

// On affiche le tableau dans son intégralité.
Console.WriteLine();
Console.WriteLine("On affiche le tableau dans son intégralité.");
for (compteur_tableau = 0; compteur_tableau < tableau.Length; compteur_tableau++)
{
    Console.WriteLine("La valeur d'indice " + compteur_tableau + " est : " + tableau[compteur_tableau]);
}

// Je passe à la suite car l'heure tourne et que je veux au moins répondre au cahier des charges avant le cours de demain.


// Tri du tableau.
for (compteur_1 = 0; compteur_1 < (longueur_tableau); compteur_1++)
{
    for (compteur_2 = 0; compteur_2 < longueur_tableau; compteur_2++)
    {
        if (tableau[compteur_1] < tableau[compteur_2])
        {
            temporaire = tableau[compteur_2];
            tableau[compteur_2] = tableau[compteur_1];
            tableau[compteur_1] = temporaire;
        }
    }
}

// Affichage du tableau trié.
Console.WriteLine();
Console.WriteLine("Le nouveau tableau trié donne :");
for ( compteur_tableau = 0; compteur_tableau < longueur_tableau; compteur_tableau++)
{
        Console.WriteLine("La valeur du tableau pour l'indice " + compteur_tableau + " est : " + tableau[compteur_tableau]);
}