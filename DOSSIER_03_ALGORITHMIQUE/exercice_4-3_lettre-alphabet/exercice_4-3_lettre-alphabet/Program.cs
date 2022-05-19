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

            compteur_occurence = 0;
            //compteur_texte = 0;
            //compteur_alphabet = 0;
            end = "Traitement terminé.";
            texte = "a";
            
            tableau_alphabet = alphabet.ToCharArray();

            //On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).

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
                Console.WriteLine("La lettre " + tableau_texte[compteur_texte] + " apparaît " + compteur_occurence + " fois dans le texte.");
            }
            Console.WriteLine(end);
        }
    }
}
