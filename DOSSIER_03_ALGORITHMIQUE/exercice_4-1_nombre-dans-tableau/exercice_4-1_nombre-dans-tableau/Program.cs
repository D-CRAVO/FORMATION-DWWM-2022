using System;

namespace exercice_4_1_nombre_dans_tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int compteur;
            int nombre;

            int[] tableau = { 8, 16, 32, 64, 128, 256, 512 };
            string end = "Nombre non trouvé.";
            
            compteur = 0;

            Console.Write("Veuillez saisir un nombre entier : ");
            nombre = int.Parse(Console.ReadLine());
            do
            {
                if (tableau[compteur] == nombre)
                {
                    Console.WriteLine("L'indice du nombre " + nombre + " dans le tableau est : " + (compteur + 1));
                    compteur = tableau.Length;
                    end = "Le traitement est terminé.";
                }
                else
                {
                    compteur++;
                    
                }
            } while (compteur < tableau.Length);
            Console.WriteLine(end);

        }
    }
}
