using System;

namespace exercice_4_1_nombre_dans_tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // EXERCICE 4.1 RECHERCHER UN NOMBRE DANS UN TABLEAU

            // VARIABLES

            int indice = 0;
            float nombre_saisi;

            float[] tableau = { 8, 16, 32, 64, 128, 256, 512 };
            string end = "Nombre non trouvé.";

            // DEBUT PROGRAMME
            
            // On récupère la saisie utilisateur.
            Console.Write("Veuillez saisir un nombre entier : ");
            nombre_saisi = float.Parse(Console.ReadLine());

            // On fait un DO WHILE et non un FOR pour s'arrêter dès que l'on a trouvé le nombre saisi.
            do
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
            } while (indice < tableau.Length);
            Console.WriteLine(end);

            // FIN PROGRAMME

        }
    }
}
