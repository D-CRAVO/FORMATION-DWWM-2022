// VARIABLES
string legume_et_prix;
string end = "Traitement terminé";
int compteur = 0 ;

char[] separateurs = new char[] { ' ' };
string[,] legume_prix_separes = new string[,] { };
string[,] nouveau_legume_prix_separes = new string[,] { };

// PROGRAMME

// On suppose dans un premier temps que les noms des légumes sont écrits sans espaces.
Console.WriteLine("Veuillez saisir le nom de votre légume suivi de son prix au kilo séparé par un espace : ");
legume_et_prix = Console.ReadLine(); 

do
{
    // On suppose dans un premier temps que les noms des légumes sont écrits sans espaces.
    Console.WriteLine("Veuillez saisir le nom de votre légume suivi de son prix au kilo séparé par un espace : ");
    legume_et_prix = Console.ReadLine();

    if (legume_et_prix.ToLower() != "go")
    {
        // On découpe la variable legume_et_prix en deux parties afin de récupérer le nom du légume et son prix
        // séparément dans un tableau à deux dimensions.
        string[] legume_prix = legume_et_prix.Split(separateurs, StringSplitOptions.RemoveEmptyEntries);
        nouveau_legume_prix_separes = new string[,] { { legume_prix[compteur], legume_prix[1] } };
        legume_prix_separes =  legume_prix_separes.Concat(nouveau_legume_prix_separes).ToArray();

        // Rechercher char[][] JaggedCharArray = new char[][]
        // https://codes-sources.commentcamarche.net/forum/affich-1346404-tableau-a-2-dimensions-en-c
        // https://stackoverflow.com/questions/1547252/how-do-i-concatenate-two-arrays-in-c
        // https://www.delftstack.com/fr/howto/csharp/merge-two-arrays-in-csharp/

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





