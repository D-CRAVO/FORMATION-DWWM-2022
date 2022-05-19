using System;

namespace exercice_4_3_lettre_alphabet
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string texte;
            string alphabet;
            string end;

            int compteur_occurence;
            int compteur_texte;
            int compteur_alphabet;

            char[] tableau_texte;
            char[] tableau_alphabet;

            alphabet = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

            end = "Traitement terminé.";
                        
            tableau_alphabet = alphabet.ToCharArray();

            do
            {
                Console.WriteLine("Veuillez saisir votre texte : ");
                texte = Console.ReadLine(); //texte = Console.ReadLine().ToLower();
            } while (texte.Length < 120);

            tableau_texte = texte.ToCharArray();
                        
            for (compteur_alphabet = 0; compteur_alphabet < tableau_alphabet.Length-1; compteur_alphabet++)
            {
                compteur_occurence = 0;
                for (compteur_texte = 0; compteur_texte < texte.Length-1; compteur_texte++)
                {
                    if (tableau_alphabet[compteur_alphabet] == tableau_texte[compteur_texte])
                    {
                        compteur_occurence++;
                    }
                }
                Console.WriteLine("La lettre " + tableau_alphabet[compteur_alphabet] + " apparaît " + compteur_occurence + " fois dans le texte.");
            }
            Console.WriteLine(end);
        }
    }
}
