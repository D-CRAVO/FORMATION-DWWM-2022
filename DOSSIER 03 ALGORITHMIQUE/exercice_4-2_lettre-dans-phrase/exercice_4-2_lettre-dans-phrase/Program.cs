using System;

namespace exercice_4_2_lettre_dans_phrase
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 4.2 RECHERCHER UNE LETTRE DANS UNE PHRASE

            // VARIABLES

            string chaine;
            char lettre_donnee;
            char[] tableau_chaine;
            int compteur_boucle;
            int compteur_occurence = 0;

            // DEBUT PROGRAMME

            Console.WriteLine("Veuillez saisir une phrase terminée par un point : ");
            chaine = Console.ReadLine();
            
            if ((chaine == "") || (chaine == "."))
            {
                Console.WriteLine("La chaine est vide.");
            }
            else
            {
                tableau_chaine = chaine.ToCharArray();
                Console.Write("Veuillez saisir un caractère : ");
                lettre_donnee = char.Parse(Console.ReadLine());

                // On parcourt toute la chaine pour compter le nombre de fois où la lettre donnée apparaît.
                for (compteur_boucle = 0; compteur_boucle < tableau_chaine.Length - 1; compteur_boucle++)
                {
                    if (tableau_chaine[compteur_boucle] == lettre_donnee)
                    {
                        compteur_occurence++;
                    }
                }

                // On vérifie si la lettre donnée est présente ou non.
                if (compteur_occurence == 0)
                {
                    Console.WriteLine("La lettre n'est pas présente.");
                }
                else
                {
                    Console.WriteLine("La lettre " + lettre_donnee + " est présente " + compteur_occurence + " fois.");
                }
            }

            // FIN PROGRAMME
            
        }
    }
}
