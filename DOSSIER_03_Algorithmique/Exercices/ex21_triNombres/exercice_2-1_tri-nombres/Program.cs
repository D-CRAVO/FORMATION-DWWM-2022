using System;

namespace ex21_triNombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Veuillez saisir votre premier nombre : ");
            float nombre_1 = float.Parse(Console.ReadLine());
            Console.Write("Veuillez saisir votre deuxième nombre : ");
            float nombre_2 = float.Parse(Console.ReadLine());
            if (nombre_1 > nombre_2)
            {
                float temporaire = nombre_1;
                nombre_1 = nombre_2;
                nombre_2 = temporaire;
            }
            Console.WriteLine("Les deux nombres classés par ordre croissant donne " + nombre_1 + " , " + nombre_2);
        }
    }
}
