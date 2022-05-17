using System;

namespace exercice_2_3_ma_retraite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            float age_retraite = 60;
            Console.Write("Veuillez saisir votre âge : ");
            float age = float.Parse(Console.ReadLine());
            if (age<0)
            {
                Console.WriteLine("La valeur fournie n'est pas un âge valide");
            }
            else
            {
                if (age < age_retraite)
                {
                    float difference = age_retraite - age;
                    Console.WriteLine("Il vous reste " + difference + " années avant la retraite.");
                }
                else
                {
                    if (age > age_retraite)
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
}
