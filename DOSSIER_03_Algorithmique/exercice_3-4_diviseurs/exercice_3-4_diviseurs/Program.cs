using System;

namespace exercice_3_4_diviseurs
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int diviseur;

            Console.Write("Veuillez saisir votre premier nombre entier : ");
            nombre = int.Parse(Console.ReadLine());
            diviseur = nombre - 1;
            for (diviseur = nombre-1; diviseur >3; diviseur--)
            {
                if ((nombre % diviseur) == 0)
                {
                    Console.Write(diviseur + " ");
                }
            }
        }
    }
}
