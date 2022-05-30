// EXERCICE 2.5 MA BICYCLETTE

// VARIABLES

bool il_fait_beau;
bool bicyclette_est_en_mauvais_etat;
bool reparation_est_immediate;
bool livre_est_dans_le_salon;
bool livre_est_a_la_bibliotheque;

// DEBUT PROGRAMME

Console.WriteLine("Fait-il beau ? (true pour oui / false pour non)");
il_fait_beau = bool.Parse(Console.ReadLine());
if (il_fait_beau)
{
    Console.WriteLine("La bicyclette est-elle en mauvais état ? (true pour oui / false pour non)");
    bicyclette_est_en_mauvais_etat = bool.Parse(Console.ReadLine());
    if (bicyclette_est_en_mauvais_etat)
    {
        Console.WriteLine("Vous allez chez le garagiste");
        Console.WriteLine("La réparation est-elle immédiate ? (true pour oui / false pour non)");
        reparation_est_immediate = bool.Parse(Console.ReadLine());
        if (reparation_est_immediate)
        {
            Console.WriteLine("Je vais faire de la bicyclette.");
        }
        else
        {
            Console.WriteLine("Je vais marcher.");
        }
    }
    else
    {
        Console.WriteLine("Je vais faire de la bicyclette.");
    }
}
else
{
    Console.WriteLine("Vous voulez lire Game Of Thrones.");
    Console.WriteLine("Le livre est-il dans votre salon ? (true pour oui / false pour non)");
    livre_est_dans_le_salon = bool.Parse(Console.ReadLine());
    if (livre_est_dans_le_salon)
    {
        Console.WriteLine("Vous relisez Game Of Thrones.");
    }
    else
    {
        Console.WriteLine("Vous allez à la bibliothèque.");
        Console.WriteLine("Le livre est-il disponible à la bibliothèque ? (true pour oui / false pour non)");
        livre_est_a_la_bibliotheque = bool.Parse(Console.ReadLine());
        if (livre_est_a_la_bibliotheque)
        {
            Console.WriteLine("Vous rentrez à la maison.");
            Console.WriteLine("Vous relisez Game Of Thrones.");
        }
        else
        {
            Console.WriteLine("Vous empruntez un roman policier");
            Console.WriteLine("Vous rentrez à la maison.");
            Console.WriteLine("Vous lisez le roman");
        }
    }
}

// FIN PROGRAMME
