using System;

namespace exercice_4_2_lettre_dans_phrase
{
    internal class Program
    {
        static void Main(string[] args)
        {

            
            string phrase;
            char caractere;
            char[] tableau;
            int compteur_boucle;
            int compteur_occurence;

            compteur_boucle = 0;
            compteur_occurence = 0;

            //It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            Console.WriteLine("Veuillez saisir une phrase : ");
            phrase = Console.ReadLine();
            Console.Write("Veuillez saisir un caractère : ");
            caractere = char.Parse(Console.ReadLine());
            if ((phrase == "") || (phrase == "."))
            {
                Console.WriteLine("La chaine est vide.");
            }
            else
            {
                do
                {
                    tableau = phrase.ToCharArray();
                    if (tableau[compteur_boucle] == caractere)
                    {
                        compteur_occurence++;
                    }
                    compteur_boucle++;
                } while (compteur_boucle < tableau.Length);
                if (compteur_occurence == 0)
                {
                    Console.WriteLine("La lettre n'est pas présente.");
                }
                else
                {
                    Console.WriteLine("La lettre " + caractere + " est présente " + compteur_occurence + " fois.");
                }
            }
            
        }
    }
}
