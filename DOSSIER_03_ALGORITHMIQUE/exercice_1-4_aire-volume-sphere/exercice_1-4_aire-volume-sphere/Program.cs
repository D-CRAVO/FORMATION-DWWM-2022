using System;

namespace exercice_1_4_aire_volume_sphere
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Veuillez saisir le rayon de la sphère : ");
            double rayon = double.Parse(Console.ReadLine().Replace(".",","));
            Console.WriteLine(rayon);
            double aire = Math.Round((4 * Math.Pow(rayon, 2) * Math.PI),2);
            Console.WriteLine("L'aire de la sphère est de {0:#,###.0000} m2", aire);
            double volume = Math.Round(((double)4 / 3 )* Math.PI * Math.Pow(rayon, 3), 2);
            Console.WriteLine("Le volume de la sphère est de {0:#,###.0000} m3",  volume);
        }
    }
}
