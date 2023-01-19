using System;

namespace ex41_nombreTableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 4.1 RECHERCHER UN NOMBRE DANS UN TABLEAU

            // VARIABLES

            int indice = 0;
            float nombre_saisi;

            float[] tableau = { 12 };
            string end = "Nombre non trouvé.";

            // DEBUT PROGRAMME

            // On récupère la saisie utilisateur.
            Console.Write("Veuillez saisir un nombre entier : ");
            nombre_saisi = float.Parse(Console.ReadLine());

            if (tableau.Length == 0)
            {
                Console.WriteLine("Le tableau est vide !");
            }
            else
            {
                // On fait un DO WHILE et non un FOR pour s'arrêter dès que l'on a trouvé le nombre saisi.
                while (indice < tableau.Length)
                {
                    if (tableau[indice] == nombre_saisi)
                    {
                        Console.WriteLine("L'indice du nombre " + nombre_saisi + " dans le tableau est : " + (indice + 1));
                        indice = tableau.Length;
                        end = "Le traitement est terminé.";
                    }
                    else
                    {
                        indice++;
                    }
                }
                Console.WriteLine(end);
            }



            // FIN PROGRAMME

        }
    }
}
