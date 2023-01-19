using System;

namespace ex32_controleSaisieLimite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int compteur;
            string mot_de_passe;
            string mot_de_passe_saisi;
            //bool youWin=false;
            string end = "Votre compte est bloqué";
            mot_de_passe = "azerty";
            compteur = 0;

            while (compteur < 3)  //while (compteur < 3 && youWin==false)
            {
                Console.Write("Veuillez saisir votre mot de passe : ");
                mot_de_passe_saisi = Console.ReadLine();
                if (mot_de_passe_saisi == mot_de_passe)
                {
                    Console.WriteLine("Vous êtes connecté.");
                    compteur = 3;
                    end = "Vous êtes deconneté, au revoir";
                }
                else
                {
                    compteur = compteur + 1;

                }
            }

            Console.WriteLine(end);
        }
    }
}
