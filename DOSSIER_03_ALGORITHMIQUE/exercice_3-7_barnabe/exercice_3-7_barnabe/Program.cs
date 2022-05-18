using System;

namespace exercice_3_7_barnabe
{
    internal class Program
    {
        static void Main(string[] args)
        {
            float somme;
            int compteur;

            compteur = 0;
            somme = 0;

            Console.Write("Veuillez entrer la somme de départ : ");
            somme = float.Parse(Console.ReadLine());
            while (somme > 1)
            {
                somme = somme - (somme/2 + 1);
                compteur++;
            }
            Console.WriteLine("Barbabé a visité " + (compteur + 1) + " magasins.");
        }
    }
}
