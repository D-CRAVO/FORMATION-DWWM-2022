using System;

namespace ex43_lettreAlphabet
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 4.3 DENOMBRER LES LETTRES DE L'ALPHABET DANS UN TABLEAU

            // DECLARATION VARIABLES

            string texte;
            string alphabet = "";

            int nombre_caractere = 5;
            int compteur_occurence;
            int compteur_texte;
            int compteur_alphabet;

            char[] tableau_texte;
            char[] tableau_alphabet = new char[26];

            char a = 'a';

            // DEBUT PROGRAMME

            // On charge l'alphabet dans le tableau alphabet.
            for (compteur_alphabet = 0; compteur_alphabet < tableau_alphabet.Length; compteur_alphabet++)
            {
                alphabet += a++;
            }
            tableau_alphabet = alphabet.ToCharArray();

            // On demande à l'utilisateur de saisir un texte de 120 caractères minimum.
            // On boucle tant que ce n'est pas le cas.
            do
            {
                Console.WriteLine("Veuillez saisir votre texte de " + nombre_caractere + " caractères minimum: ");
                texte = Console.ReadLine().ToLower();
            } while (texte.Length < nombre_caractere);
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
                if (compteur_occurence != 0)
                {
                    Console.WriteLine("La lettre " + tableau_alphabet[compteur_alphabet] + " apparaît " + compteur_occurence + " fois dans le texte.");
                }
            }
        }
    }
}
