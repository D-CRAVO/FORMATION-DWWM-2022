// See https://aka.ms/new-console-template for more information
Console.WriteLine("Hello, World!");

// collection de données

int variable = 1;
int[] tableau;
tableau = new int[10];
tableau[4] = 1337;
tableau[7] = 42;
int emplacement4 = tableau[4];
emplacement4 = 1111;
Console.WriteLine(emplacement4);
Console.WriteLine(tableau[4]);

string[] pays;
pays = new string[]
{
    "France",
    "Allemagne",
    "Maroc",
    "Belgique"
};

//Console.WriteLine(pays[1]);
//pays[1] = "Autriche";
//Console.WriteLine(pays[1]);

for (int i = 0; i < pays.Length; i++)
{
    Console.WriteLine(i + " = " + pays[i]);
}

string[] resultat = new string[pays.Length - 1];

int j = 0;
for (int i = 0; i < pays.Length; i++)
{
    if (pays[i] != "Allemagne")
    {
        resultat[j] = pays[i];
        j++;
    }
    Console.WriteLine(resultat[j]);
}

//for (int i = 0; i < tableau.Length; i++)
//{
//    Console.WriteLine(i + " = " + tableau[i]);
//}


// installer Laragon pour demain version full