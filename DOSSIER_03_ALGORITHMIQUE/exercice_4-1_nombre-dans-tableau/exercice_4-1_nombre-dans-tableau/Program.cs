using System;

namespace exercice_4_1_nombre_dans_tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int compteur;
            int nombre;

            int[] tableau = new int[] { 8, 16, 32, 64, 128, 256, 512 };
            compteur = 0;

            Console.WriteLine("Veuillez saisir un nombre entier : ");
            nombre = int.Parse(Console.ReadLine());
            while (compteur < tableau.Length)
            {
                if (tableau[compteur] == nombre)
                {
                    Console.WriteLine("L'indice du nombre " + nombre + " dans le tableau est : " + (compteur + 1));
                    compteur = tableau.Length;
                }
                else
                {
                    compteur++;
                }
            }
            Console.WriteLine("Nombre non trouvé.");

        }
    }
}
