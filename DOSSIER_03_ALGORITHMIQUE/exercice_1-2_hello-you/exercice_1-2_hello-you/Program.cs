using System;

namespace exercice_1_2_hello_you
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Veuillez saisir votre prénom : ");
            string prenom = Console.ReadLine();
            Console.WriteLine("Bonjour " + prenom);
        }
    }
}
