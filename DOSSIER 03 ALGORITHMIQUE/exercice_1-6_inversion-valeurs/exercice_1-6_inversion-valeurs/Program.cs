using System;

namespace exercice_1_6_inversion_valeurs
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Veuillez saisir la première valeur : ");
            float nombre1 = float.Parse(Console.ReadLine());
            Console.Write("Veuillez saisir la deuxième valeur : ");
            float nombre2 = float.Parse(Console.ReadLine());
            float temporaire = nombre1;
            nombre1 = nombre2;
            nombre2 = temporaire;   
            Console.WriteLine("La nouvelle première valeur est  : " + nombre1);
            Console.WriteLine("La nouvelle deuxième valeur est  : " + nombre2);
        }
    }
}
