using System;

namespace exercice_3_4_diviseurs
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int compteur;

            Console.Write("Veuillez saisir votre premier nombre entier : ");
            nombre = int.Parse(Console.ReadLine());
            compteur = nombre - 1;
            while (compteur >= 2)
            {
                if ((nombre % compteur) == 0)
                {
                    Console.Write(compteur + " ");
                }
                compteur--;
            }
        }
    }
}
