﻿using System;

namespace exercice_3_7_barnabe
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 3.7 BARNABE FAIT SES COURSES

            // VARIABLES

            float argent = 0;
            int magasins_visites = 0;
            
            // DEBUT PROGRAMME

            Console.Write("Veuillez entrer la somme de départ : ");
            argent = float.Parse(Console.ReadLine());
            while (argent > 1)
            {
                argent = argent - (argent/2 + 1);
                magasins_visites++;
            }
            Console.WriteLine("Barbabé a visité " + (magasins_visites + 1) + " magasins.");

            // FIN PROGRAMME
        }
    }
}
