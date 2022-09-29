// EXERCICE 2.4 TRI DE NOMBRES ++

// VARIABLES

float a;
float b;
float c;

// DEBUT PROGRAMME

Console.Write("Veuillez saisir votre premier nombre : ");
a = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre premier nombre : ");
b = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre premier nombre : ");
c = float.Parse(Console.ReadLine());

Console.Write("Le tri des nombres " + a + " , " + b + " , " + c + " dans l'ordre décroissant donne : ");

if (a<b && b<c)
{
    Console.Write(c + " < " + b + " < " + a);
}
else if (a<c && c<b)
{
    Console.Write(b + " < " + c + " < " + a);
}
else if (c<b && b<a)
{
    Console.Write(a + " < " + b + " < " + c);
}
else if (b<a && b<c && c<a)
{
    Console.Write(a + " < " + c + " < " + b);
}
else if (a<b && c<b && c<a)
{
    Console.Write(b + " < " + a + " < " + c);
}
else if (b<a && b<c && a<c)
{
    Console.Write(c + " < " + a + " < " + b);
}

// FIN PROGRAMME
