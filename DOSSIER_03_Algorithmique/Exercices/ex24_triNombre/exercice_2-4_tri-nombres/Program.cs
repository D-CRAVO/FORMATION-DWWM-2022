using System;

namespace ex24_triNombre
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 2.4 TRI DE NOMBRES++

            // Trier 3 nombres dans l'ordre décroissant

            float nombre_A;
            float nombre_B;
            float nombre_C;
            float nombre_1;
            float nombre_2;
            float nombre_3;
            float temporaire;

            Console.Write("Veuillez saisir votre premier nombre : ");
            nombre_A = float.Parse(Console.ReadLine());
            nombre_1 = nombre_A;

            Console.Write("Veuillez saisir votre deuxième nombre : ");
            nombre_B = float.Parse(Console.ReadLine());
            nombre_2 = nombre_B;

            Console.Write("Veuillez saisir votre troisième nombre : ");
            nombre_C = float.Parse(Console.ReadLine());
            nombre_3 = nombre_C;

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
            Console.WriteLine("Le tri des nombres " + nombre_A + " , " + nombre_B + " , " + nombre_C + " dans l'ordre décroissant donne : " + nombre_1 + ", " + nombre_2 + ", " + nombre_3 + ".");
        }
    }
}
