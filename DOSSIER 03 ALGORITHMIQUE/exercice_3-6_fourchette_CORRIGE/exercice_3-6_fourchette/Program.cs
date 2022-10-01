using System;

namespace exercice_3_6_fourchette
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre_machine;
            int limite_inferieure;
            int limite_superieure;
            int compteur;
            int nombre_saisi;
            Random aleas = new Random();
            nombre_machine = aleas.Next(0,101);
            compteur = 0;
            nombre_saisi = 0;
            limite_inferieure = 0;
            limite_superieure = 100;

            //  Console.WriteLine(nombre);
            do
            {
                Console.WriteLine("Nombre d'essais : " + compteur);
                Console.WriteLine("Veuillez saisir un nombre entier entre : " + limite_inferieure + " et " + limite_superieure);

                nombre_saisi = int.Parse(Console.ReadLine());
                if (nombre_machine < nombre_saisi)
                {
                    limite_superieure = nombre_saisi;
                    compteur++;
                    
                }
                else
                {
                    limite_inferieure = nombre_saisi;
                    compteur++;
                }
                Console.WriteLine("Le nombre est compris entre " + limite_inferieure + " et " + limite_superieure);
               
            } while (nombre_saisi != nombre_machine);
            Console.WriteLine("Bravo, vous avez trouvé en " + compteur + " essais. C'était le nombre : " + nombre_saisi);
        }
    }
}
