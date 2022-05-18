using System;

namespace exercice_3_1_controler_la_saisie
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string prenom;

            do
            {
                Console.Write("Veuillez saisir votre prénom : ");
                prenom = Console.ReadLine();
            }
            while (prenom.Length <= 2);
            Console.WriteLine("Bonjour " + prenom);
        }
    }
}
