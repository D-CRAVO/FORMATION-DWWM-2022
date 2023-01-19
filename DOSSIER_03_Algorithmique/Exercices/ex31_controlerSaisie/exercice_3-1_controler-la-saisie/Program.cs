using System;

namespace ex31_controlerSaisie
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
                if (prenom.Length <= 2)
                {
                    Console.WriteLine("Votre prénom doit contenir au moins deux caractères");
                }
            }
            while (prenom.Length <= 2);
            Console.WriteLine("Bonjour " + prenom);
        }
    }
}
