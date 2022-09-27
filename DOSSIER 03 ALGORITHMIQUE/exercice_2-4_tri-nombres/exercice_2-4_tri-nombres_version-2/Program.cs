// EXERCICE 2.4 TRI DE NOMBRES++

// Trier 3 nombres dans l'ordre décroissant

// VARIABLES

float a;
float b;
float c;

// DEBUT PROGRAMME

Console.Write("Veuillez saisir votre premier nombre : ");
a = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre deuxième nombre : ");
b = float.Parse(Console.ReadLine());

Console.Write("Veuillez saisir votre troisième nombre : ");
c = float.Parse(Console.ReadLine());

Console.Write("Le tri des nombres " + a + " , " + b + " , " + c + " dans l'ordre décroissant donne : ");

if (a < b)
{
    if (b < c)
    {
        Console.WriteLine(c + ", " + b + ", " + a);
    }
    else
    {
        if (c < a)
        {
            Console.WriteLine(b + ", " + a + ", " + c);
        }
        else
        {
            Console.WriteLine(b + ", " + c + ", " + a);
        }
    }
}
else
{
    if (b < c)
    {
        if (a < c)
        {
            Console.WriteLine(c + ", " + a + ", " + b);
        }
        else
        {
            Console.WriteLine(a + ", " + c + ", " + b);
        }
    }
    else
    {
        Console.WriteLine(a + ", " + b + ", " + c);
    }
}

