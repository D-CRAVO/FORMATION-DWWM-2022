// VARIABLES
string legume_et_prix_saisi;
double prix_le_moins_cher;
string end = "Traitement terminé";
int compteur = 0 ;
int index = 0 ;

char[] separateurs = new char[] { ' ' };

List<string> nouveau_legume_nom = new List<string>();
List<string> nouveau_legume_prix = new List<string>();

// PROGRAMME

// On suppose dans un premier temps que les noms des légumes sont écrits sans espaces.
do
{
    // On suppose dans un premier temps que les noms des légumes sont écrits sans espaces.
    Console.WriteLine("Veuillez saisir le nom de votre légume suivi de son prix au kilo séparé par un espace : ");
    legume_et_prix_saisi = Console.ReadLine();

    if (legume_et_prix_saisi.ToLower() != "go")
    {
        // On découpe la variable legume_et_prix en deux parties afin de récupérer le nom du légume et son prix
        string[] legume_prix = (legume_et_prix_saisi.Split(separateurs, StringSplitOptions.RemoveEmptyEntries));

        nouveau_legume_nom.Add(legume_prix[0]);
        nouveau_legume_prix.Add(legume_prix[1]);

        // Rechercher char[][] JaggedCharArray = new char[][]
        // https://codes-sources.commentcamarche.net/forum/affich-1346404-tableau-a-2-dimensions-en-c
        // https://stackoverflow.com/questions/1547252/how-do-i-concatenate-two-arrays-in-c
        // https://www.delftstack.com/fr/howto/csharp/merge-two-arrays-in-csharp/

    }
} while (legume_et_prix_saisi.ToLower() != "go");


// Affichage du nom du légume et de son prix au kilo.
for (compteur = 0; compteur < nouveau_legume_nom.Count; compteur++)
{
    Console.WriteLine("1 kilogramme de " + nouveau_legume_nom[compteur] + " coute " + nouveau_legume_prix[compteur] + " euros.");
}


// Recherche et affichage du moins cher
prix_le_moins_cher = double.Parse(nouveau_legume_prix[0]);
for (compteur = 0; compteur < nouveau_legume_nom.Count; compteur++)
{
    if (double.Parse(nouveau_legume_prix[compteur]) < prix_le_moins_cher)
    {
        prix_le_moins_cher = double.Parse(nouveau_legume_prix[compteur]);
        index = compteur;
    }
}

Console.WriteLine("Prix au kilo le moins cher : " + prix_le_moins_cher + " euros");
Console.WriteLine("Légume le moins cher au kilo : " + nouveau_legume_nom[index]);
Console.WriteLine(end);