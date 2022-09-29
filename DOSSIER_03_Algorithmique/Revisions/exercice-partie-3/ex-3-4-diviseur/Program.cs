Console.WriteLine("Diviseurs");

// EXERCICE 3.4 RECHERCHE DES DIVISEURS D'UN NOMBRE

// VARIABLES
int nb;

// DEBUT PROGRAMME

// Récupération des données utilisateur
Console.Write("Veuillez saisir votre nombre : ");
nb = int.Parse(Console.ReadLine());

// Traitement et affichage
for (int i = nb - 1; i > 1; i--)
{
    if (nb % i == 0)
    {
        Console.WriteLine(i);
    }
}