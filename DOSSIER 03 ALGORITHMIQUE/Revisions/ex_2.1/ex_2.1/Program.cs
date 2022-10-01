// EXERCICE 2.1 TRI DE NOMBRES DANS L'ORDRE CROISSANT

// VARIABLES

float nombreA;
float nombreB;

// DEBUT PROGRAMME

// On récupère les données utilisateur.
Console.Write("Veuillez saisir votre premier nombre A : ");
nombreA = float.Parse(Console.ReadLine());
Console.Write("Veuillez saisir votre deuxième nombre B : ");
nombreB = float.Parse(Console.ReadLine());

// On compare les deux nombres et on affiche le résultat.
if (nombreA < nombreB)
{
    Console.WriteLine("Le tri des nombres A " + nombreA + " et " + nombreB + " donne " + nombreA + " , " + nombreB);
}
else
{
    Console.WriteLine("Le tri des nombres A " + nombreA + " et " + nombreB + " donne " + nombreB + " , " + nombreA);

}


