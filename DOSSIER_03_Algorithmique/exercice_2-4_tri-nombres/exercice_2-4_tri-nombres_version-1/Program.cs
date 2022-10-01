// EXERCICE 2.4 TRI DE NOMBRES++

// Trier 3 nombres dans l'ordre décroissant

// VARIABLES

float nombre_1;
float nombre_2;
float nombre_3;
float temporaire;

// DEBUT PROGRAMME

Console.Write("Veuillez saisir votre premier nombre : ");
nombre_1 = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre deuxième nombre : ");
nombre_2 = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre troisième nombre : ");
nombre_3 = float.Parse(Console.ReadLine());

Console.Write("Le tri des nombres " + nombre_1 + " , " + nombre_2 + " , " + nombre_3 + " dans l'ordre décroissant donne : ");

if (nombre_2 > nombre_1)
{
    temporaire = nombre_1;
    nombre_1 = nombre_2;
    nombre_2 = temporaire;
}

if (nombre_3 > nombre_2)
{
    temporaire = nombre_2;
    nombre_2 = nombre_3;
    nombre_3 = temporaire;
}

if (nombre_2 > nombre_1)
{
    temporaire = nombre_1;
    nombre_1 = nombre_2;
    nombre_2 = temporaire;
}

Console.WriteLine(nombre_1 + " , " + nombre_2 + " , " + nombre_3);