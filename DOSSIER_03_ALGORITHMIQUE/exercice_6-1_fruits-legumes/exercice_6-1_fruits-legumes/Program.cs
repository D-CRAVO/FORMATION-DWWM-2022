// VARIABLES
string legume_et_prix;
string end = "Traitement terminé";
int compteur = 0 ;

char[] separateurs = new char[] { ' ' };
string[,] legume_prix_separes = new string[,] { };


// PROGRAMME





do
{
    // On suppose dans un premier temps que les noms des légumes sont écrits sans espaces.
    Console.WriteLine("Veuillez saisir le nom de votre légume suivi de son prix au kilo séparé par un espace");
    legume_et_prix = Console.ReadLine();

    if (legume_et_prix != "go")
    {
        // On découpe la variable legume_et_prix en deux parties afin de récupérer le nom du légume et son prix
        // séparément dans un tableau à deux dimensions.
        string[] legume_prix = legume_et_prix.Split(separateurs, StringSplitOptions.RemoveEmptyEntries);
        legume_prix_separes =  new string[,] { { legume_prix[compteur], legume_prix[1] } };

        // On affiche le tableau à deux dimensions obtenu.
        Console.WriteLine("On affiche le tableau à deux dimensions obtenu : ");
        Console.WriteLine(legume_prix_separes[compteur, 0] + " " + legume_prix_separes[compteur, 1]);
        compteur++;
    }
    else
    {
        Console.WriteLine(end);
        break;
    }

  
} while (legume_et_prix.ToLower() != "go");





