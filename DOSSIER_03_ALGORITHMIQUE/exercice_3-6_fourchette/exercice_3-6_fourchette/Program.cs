using System;

namespace exercice_3_6_fourchette
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int limite_inferieure;
            int limite_superieure;
            int compteur;
            int nombre_saisi;

            nombre = 27;
            compteur = 0;
            nombre_saisi = 0;
            limite_inferieure = 0;
            limite_superieure = 100;

            Console.WriteLine(nombre);
            while (nombre_saisi != nombre)
            {
                Console.WriteLine("Veuillez saisir un nombre entier : ");
                nombre_saisi = int.Parse(Console.ReadLine());
                if (nombre < nombre_saisi)
                {
                    limite_superieure = nombre_saisi;
                }
                else
                {
                    limite_inferieure = nombre_saisi;
                }
                Console.WriteLine("Le nombre est compris entre " + limite_inferieure + " et " + limite_superieure);
                compteur++;
            }
            Console.WriteLine("Bravo, vous avez trouvé en " + compteur + " essais.");
        }
    }
}
