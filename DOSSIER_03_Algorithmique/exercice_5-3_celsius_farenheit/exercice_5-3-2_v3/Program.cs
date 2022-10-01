// VERSION 5.3.2 CONVERSION DEGRES FARENHEIT DEGRES CELSIUS

// VARIABLES

string unite;
string affichage = "quit";
double valeur_min;
double valeur_max;
double temp_farenheit_min = 0;
double temp_farenheit_max = 0;
double temp_celsius_min = 0;
double temp_celsius_max = 0;

// DEBUT PROGRAMME

do
{
    Console.Write("Veuillez saisir Votre unité de mesure (C ou F) : ");
    unite = Console.ReadLine().ToLower();

    if (unite != "quit")
    {
        Console.Write("Veuillez saisir la valeur minimum : ");
        valeur_min = double.Parse(Console.ReadLine());
        Console.Write("Veuillez saisir la valeur maximum : ");
        valeur_max = double.Parse(Console.ReadLine());

        if (unite == "c")
        {
            temp_farenheit_min = (valeur_min * 9 / 5) + 32;
            temp_farenheit_max = (valeur_max * 9 / 5) + 32;
            affichage = "celsius";
        }
        else
        {
            temp_celsius_min = (valeur_min - 32) * 5 / 9;
            temp_celsius_max = (valeur_max - 32) * 5 / 9;
            affichage = "farenheit";
        }
    }
    Affichage(affichage);
    affichage = "quit";
} while (unite != "quit");


// FIN PROGRAMME

// DEBUT FONCTIONS

void Affichage(string valeur_entree)
{
    switch (valeur_entree)
    {

        case "celsius":
            Console.WriteLine("La plage de températures est comprise entre " + temp_farenheit_min + "°F et " + temp_farenheit_max + "°F.");
            Console.WriteLine();
            break;
        case "farenheit":
            Console.WriteLine("La plage de températures est comprise entre " + temp_celsius_min + "°C et " + temp_celsius_max + "°C.");
            Console.WriteLine();
            break;
        default:
            Console.WriteLine("Aurevoir !");
            break;
    }
}

// FIN FONCTIONS
