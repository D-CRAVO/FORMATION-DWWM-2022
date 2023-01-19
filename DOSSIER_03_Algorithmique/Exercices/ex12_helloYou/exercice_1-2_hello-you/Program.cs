using System;

namespace ex12_helloYou
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
