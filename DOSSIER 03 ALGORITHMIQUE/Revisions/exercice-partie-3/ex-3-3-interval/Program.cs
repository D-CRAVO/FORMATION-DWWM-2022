Console.WriteLine("Intervalle entre deux nombres");

// EXERCICE 3.3 INTERALLE ENTRE DEUX NOMBRES

// VARIABLES
int A;
int B;


// DEBUT PROGRAMME

// Récupération des données utilisateur
Console.Write("Veuillez saisir votre premier nombre entier : ");
A = int.Parse(Console.ReadLine());
Console.Write("Veuillez saisir votre second nombre entier : ");
B = int.Parse(Console.ReadLine());

// Traitement et affichage
if (A > B)
{
    for (int i = A - 1; i > B; i--)
    {
        Console.WriteLine(i);
    }
}
else
{
    for (int i = A + 1; i < B; i++)
    {
        Console.WriteLine(i);
    }
}