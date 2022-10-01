// EXERCICE 1.3 CALCUL DE LA MOYENNE DE DEUX NOMBRES

// VARIABLES

float moyenne;
int nombre1;
int nombre2;

// DEBUT PROGRAMME

// Récupération des données utilisateur.
Console.Write("Veuillez saisir votre premier nombre : ");
nombre1 = int.Parse(Console.ReadLine());
Console.Write("Veuillez saisir votre second nombre : ");
nombre2 = int.Parse(Console.ReadLine());

// Calcul de la moyenne.
moyenne = (nombre1 + nombre2)/2;

// Affichage du résultat.
Console.WriteLine("La moyenne des nombres " + nombre1 + " et " + nombre2 + " est : " + moyenne);