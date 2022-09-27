Console.WriteLine("RECHERCHER UN NOMBRE DANS UN TABLEAU");

// EXERCICE 4.1 RECHERCHER UN NOMBRE DANS UN TABLEAU

// VARIABLES
int[] tableau = new int [] {8,16,32,64,128,256,512} ;
int nb;
string end = "Nombre non trouvé";
// DEBUT PROGRAMME

// Récupération données utilisateur.
Console.Write("Veuillez saisir un nombre entier : ");
nb = int.Parse(Console.ReadLine());
for (int i = 0; i < tableau.Length - 1; i++)
{
    if (nb == tableau[i])
    {
        end = "indice : " + i;
    }
}

// Affichage du résultat.
Console.WriteLine(end);