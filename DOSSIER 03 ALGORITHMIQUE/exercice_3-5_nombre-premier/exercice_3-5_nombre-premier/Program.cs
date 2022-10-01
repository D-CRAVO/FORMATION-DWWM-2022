using System;

namespace exercice_3_5_nombre_premier
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string saisie;
            int nombre;
            int compteur;

            Console.WriteLine("Veuillez saisir un nombre entier: ");
            saisie = Console.ReadLine();
            nombre = Int32.Parse(saisie);
            compteur = 2;
            while (compteur < nombre)
            {
                if (nombre % compteur == 0)
                {
                    Console.WriteLine("Le nombre " + nombre + " n'est pas premier.");
                    compteur = nombre;
                }
                else
                {
                    compteur++;
                    Console.WriteLine("Le nombre " + nombre + " est premier");
                    compteur = nombre;
                }
                
            }
         }
    }
}
