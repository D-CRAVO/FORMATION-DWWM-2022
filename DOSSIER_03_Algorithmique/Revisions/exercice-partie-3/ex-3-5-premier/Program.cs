Console.WriteLine("Nombre premier");

// EXERCICE 3.5 NOMBRE PREMIER

// VARIABLES
int nombre_saisi;
float diviseur;
string message = " est un nombre premier.";

// DEBUT PROGRAMME

// Récupération des données utilisateur.
Console.Write("Veuillez saisir votre nombre : ");
nombre_saisi = int.Parse(Console.ReadLine());

// Détermination si premier ou non.
for (int compteur = 2; compteur < nombre_saisi - 1; compteur++)
{
    diviseur = nombre_saisi % compteur;
    if (diviseur == 0)
    {
        message = " n'est pas un nombre premier.";
    } 
}

// Affichage du résultat.
Console.WriteLine(nombre_saisi + message);