using System;
using financier;

namespace AppFinancier
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Compte compteTintin = new Compte(1, "Tintin", 400, -500);
            Compte compteHaddock = new Compte(2, "Haddock", 0, -2000);
            Console.WriteLine("-------------------avant virement ---------------");
            Console.WriteLine(compteTintin.ToString());
            Console.WriteLine(compteHaddock);
            Console.WriteLine("-------------------après virement --------------");
            if (compteTintin.Transferer(1200,compteHaddock))
            {
                Console.WriteLine(compteTintin.ToString());
                Console.WriteLine(compteHaddock);
            }
            else
            {
                Console.WriteLine("Opération impossible, dépassement découvert autorisé.");
            }
            Console.WriteLine("-------------------avant credit débit---------------");
            Console.WriteLine(compteTintin.ToString());
            Console.WriteLine(compteHaddock);
            compteTintin.Crediter(2000);
            compteHaddock.Debiter(500);
            Console.WriteLine("-------------------après credit débit---------------");
            Console.WriteLine(compteTintin.ToString());
            Console.WriteLine(compteHaddock);
            

            if (compteTintin.Superieur(compteHaddock))
            {
                Console.WriteLine();
                Console.WriteLine("Le solde du compte de Tintin est supérieur au solde du compte de Haddock");
            }
            else
            {
                Console.WriteLine();
                Console.WriteLine("Le solde du compte de Tintin est inférieur au solde du compte de Haddock");
            }

            Banque banqueCMC = new Banque(null, 0, "Credit Mutuel", "Blois" );
            Console.WriteLine(banqueCMC);

            banqueCMC.AjouterCompte(3, "Milou", 0, 0);
            Console.WriteLine(banqueCMC.ToString());

            Console.ReadKey();
        }
    }
}
