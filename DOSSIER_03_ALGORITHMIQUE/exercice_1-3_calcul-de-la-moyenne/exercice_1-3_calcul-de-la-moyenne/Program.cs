using System;

namespace exercice_1_3_calcul_de_la_moyenne
{
    internal class Program
    {
        static void Main(string[] args)

        {
            Console.Write("Veuillez saisir un premier nombre : ");
            int nombre1 = Console.Read();
            Console.Write("Veuillez saisir un second nombre : ");
            int nombre2 = Console.Read();
            float moyenne = (nombre1 + nombre2) / 2;
            Console.WriteLine("La moyenne de " + nombre1 + " et " + nombre2 + " est : " + moyenne);
        }
    }
}
