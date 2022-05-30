using System;

namespace exercice_4_3_lettre_alphabet
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 4.3 DENOMBRER LES LETTRES DE L'ALPHABET DANS UN TABLEAU

            // DECLARATION VARIABLES
            string texte;
            string alphabet = "";
            string end = "Traitement terminé.";

            int compteur_occurence;
            int compteur_texte;
            int compteur_alphabet;

            char[] tableau_texte;
            char[] tableau_alphabet;

            char a = 'a';

            // DEBUT PROGRAMME

            // On charge l'alphabet dans le tableau alphabet.
            for (compteur_alphabet = 0; compteur_alphabet < 26; compteur_alphabet++)
            {
                alphabet += a++;
            }
            tableau_alphabet = alphabet.ToCharArray();

            // alphabet = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

            // On demande à l'utilisateur de saisir un texte de 120 caractères minimum.
            // On boucle tant que ce n'est pas le cas.
            do
            {
                Console.WriteLine("Veuillez saisir votre texte de 120 caractères minimum: ");
                texte = Console.ReadLine().ToLower();
            } while (texte.Length < 120);
            tableau_texte = texte.ToCharArray();
                  
            // On recherche le nombre d'occurences de chaque lettre de l'alphabet.
            for (compteur_alphabet = 0; compteur_alphabet < tableau_alphabet.Length; compteur_alphabet++)
            {
                compteur_occurence = 0;
                for (compteur_texte = 0; compteur_texte < texte.Length; compteur_texte++)
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
