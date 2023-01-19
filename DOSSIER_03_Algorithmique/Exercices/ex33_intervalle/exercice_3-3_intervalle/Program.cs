using System;

namespace ex33_intervalle
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre_1;
            int nombre_2;
            int compteur;

            Console.Write("Veuillez saisir votre premier nombre : ");
            nombre_1 = int.Parse(Console.ReadLine());
            Console.Write("Veuillez saisir votre second nombre : ");
            nombre_2 = int.Parse(Console.ReadLine());
            if (nombre_1 < nombre_2)
            {
                for (compteur = nombre_1 + 1; compteur < nombre_2; compteur++)
                {
                    Console.Write(compteur + " ");
                }
            }
            else
            {
                for (compteur = nombre_1 - 1; compteur > nombre_2; compteur--)
                {
                    Console.Write(compteur + " ");
                }
            }
        }
    }
}
