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

    if (unite == "quit")
    {
        affichage = "quit";
    }
    else
    {
        Console.Write("Veuillez saisir la valeur minimum : ");
        valeur_min = double.Parse(Console.ReadLine());
        Console.Write("Veuillez saisir la valeur maximum : ");
        valeur_max = double.Parse(Console.ReadLine());

        if (unite == "c")
        {
            ConversionCF(valeur_min, valeur_max);
            affichage = "celsius";
        }
        else
        {
            ConversionFC(valeur_min, valeur_max);
            affichage = "farenheit";
        }
    }
    Affichage(affichage);
} while (unite != "quit");


// FIN PROGRAMME

// DEBUT FONCTIONS

void Affichage(string valeur_entree)
{
    switch (valeur_entree)
    {

        case "celsius":
            Console.Write("La plage de températures est comprise entre {0:#,###0.00} ", temp_farenheit_min);
            Console.Write("°F et {0:#,###0.00} ", temp_farenheit_max);
            Console.WriteLine ("°F.");
            Console.WriteLine();
            break;
        case "farenheit":
            Console.Write("La plage de températures est comprise entre {0:#,###0.00} ", temp_celsius_min);
            Console.Write("°C et {0:#,###0.00} ", temp_celsius_max);
            Console.WriteLine("°C.");
            Console.WriteLine();
            break;
        default:
            Console.WriteLine("Aurevoir !");
            break;
    }
}

void ConversionCF(double valeur_min, double valeur_max)
{
    temp_farenheit_min = (valeur_min * 9 / 5) + 32;
    temp_farenheit_max = (valeur_max * 9 / 5) + 32;
}

void ConversionFC(double valeur_min, double valeur_max)
{
    temp_celsius_min = (valeur_min - 32) * 5 / 9;
    temp_celsius_max = (valeur_max - 32) * 5 / 9;
}

// FIN FONCTIONS
