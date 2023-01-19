using System;

namespace ex23_maRetraite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 2.3 MA RETRAITE

            float age_retraite = 60;
            float age;

            // On récupère la saisie utilisateur.
            do
            {
                Console.Write("Veuillez saisir votre âge : ");
                age = float.Parse(Console.ReadLine().Replace(".", ","));
            } while (age < 0);

            // On effectue les comparaisons.

            //if (age < age_retraite)
            //{
            //   float difference = age_retraite - age;
            //   Console.WriteLine("Il vous reste " + difference + " années avant la retraite.");
            //}
            //else
            //{
            //   if (age > age_retraite)
            //   {
            //       float difference = age - age_retraite;
            //       Console.WriteLine("Vous êtes à la retraite depuis " + difference + " années.");
            //   }
            //   else
            //   {
            //       Console.WriteLine("C'est le moment de prendre votre retraite.");
            //   }
            //}

            if (age < age_retraite)
            {
                float difference = age_retraite - age;
                Console.WriteLine("Il vous reste " + difference + " années avant la retraite.");
            }
            else if (age > age_retraite)
            {
                float difference = age - age_retraite;
                Console.WriteLine("Vous êtes à la retraite depuis " + difference + " années.");
            }
            else
            {
                Console.WriteLine("C'est le moment de prendre votre retraite.");
            }
        }
    }
}
}
