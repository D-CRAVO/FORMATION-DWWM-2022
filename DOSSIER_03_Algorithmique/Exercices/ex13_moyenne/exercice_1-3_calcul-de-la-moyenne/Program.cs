using System;

namespace ex13_moyenne
{
    internal class Program
    {
        static void Main(string[] args)

        {
            Console.Write("Veuillez saisir un premier nombre : ");
            float nombre1 = float.Parse(Console.ReadLine());
            Console.WriteLine(nombre1);
            Console.Write("Veuillez saisir un second nombre : ");
            float nombre2 = float.Parse(Console.ReadLine());
            Console.WriteLine(nombre2);
            float moyenne = (nombre1 + nombre2) / 2;
            Console.WriteLine("La moyenne de " + nombre1 + " et " + nombre2 + " est : " + moyenne);
        }
    }
}
