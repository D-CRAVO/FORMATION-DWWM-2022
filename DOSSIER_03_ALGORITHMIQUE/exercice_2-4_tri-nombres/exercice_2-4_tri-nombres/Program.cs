using System;

namespace exercice_2_4_tri_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Trier 3 nombres dans l'ordre décroissant

            float nombre_1;
            float nombre_2;
            float nombre_3;
            float temporaire;
            
            Console.Write("Veuillez saisir votre premier nombre : ");
            nombre_1 = float.Parse(Console.ReadLine());
            Console.Write("Veuillez saisir votre premier nombre : ");
            nombre_2 = float.Parse(Console.ReadLine());
            Console.Write("Veuillez saisir votre premier nombre : ");
            nombre_3 = float.Parse(Console.ReadLine());
            if (nombre_2 > nombre_1)
            {
                temporaire = nombre_1;
                nombre_1 = nombre_2;
                nombre_2 = temporaire;
            }
            if (nombre_3 > nombre_1)
            {
                temporaire = nombre_2;
                nombre_2 = nombre_1;
                nombre_1 = nombre_3;
                nombre_3 = temporaire;
            }        
            Console.WriteLine("Le tri des trois nombres dans l'ordre décroissant donne : " + nombre_1 + ", " + nombre_2 + ", " + nombre_3 + ".");
        }
    }
}
