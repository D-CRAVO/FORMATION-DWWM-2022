using System;

namespace ex22_esTuMajeur
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Veuillez saisir votre âge : ");
            float age = float.Parse(Console.ReadLine());
            if (age >= 18)
            {
                Console.WriteLine("Vous êtes majeur.");
            }
            else
            {
                if (age > 0)
                {
                    Console.WriteLine("Vous êtes mineur.");
                }
                else
                {
                    Console.WriteLine("Vous n'êtes pas né.");
                }
            }
        }
    }
}
