using System;

namespace convertisseur_celsius
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Veuillez saisir une température à convertir avec l'unité C/F : ");

            string tempchaine = Console.ReadLine();
            string unite = tempchaine.Substring(tempchaine.Length - 1, 1); //tempchaine[^2..]
            if (unite == "C")
            {
                double temp = double.Parse(tempchaine.Substring(0, tempchaine.Length - 2));

                temp = (temp * 9 / 5) + 32;
                temp = Math.Round(temp, 2);

                tempchaine = temp + " F";
                Console.WriteLine("Farenheit : " + tempchaine);
            }
            else 
            {
                double temp = double.Parse(tempchaine.Substring(0, tempchaine.Length - 2));

                temp = (temp - 32) * 5 / 9;
                temp = Math.Round(temp, 2);

                tempchaine = temp + " C";
                Console.WriteLine("Celsius : " + tempchaine);            
            }
        }
    }
}
