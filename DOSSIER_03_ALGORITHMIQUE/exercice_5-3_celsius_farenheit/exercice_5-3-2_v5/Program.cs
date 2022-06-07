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
double temp_min = -459.67;
double temp_max = 5000000;

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
        Intervalle(valeur_min);
        Console.Write("Veuillez saisir la valeur maximum : ");
        valeur_max = double.Parse(Console.ReadLine());
        Intervalle(valeur_max);

        if (unite == "c")
        {
           
            
            ConversionCF(valeur_min, valeur_max);
            affichage = "celsius";
        }
        else
        {
            Intervalle(valeur_min);
            Intervalle(valeur_max);
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
            Console.WriteLine("°F.");
            Console.WriteLine();
            break;
        case "farenheit":
            Console.Write("La plage de températures est comprise entre {0:#,###0.00} ", temp_celsius_min);
            Console.Write("°C et {0:#,###0.00} ", temp_celsius_max);
            Console.WriteLine("°C.");
            Console.WriteLine();
            break;
        case "min":
            Console.WriteLine("Vous êtes en dessous de la valeur minimale");
            Console.WriteLine();
            break;
        case "max":
            Console.WriteLine("Vous êtes au dessus de la valeur maximale");
            Console.WriteLine();
            break;
        default:
            Console.WriteLine("Aurevoir !");
            break;
    }
}

void ConversionCF (double valeur_min, double valeur_max)
{
    temp_farenheit_min = (valeur_min * 9 / 5) + 32;
    temp_farenheit_max = (valeur_max * 9 / 5) + 32;
}

void ConversionFC (double valeur_min, double valeur_max)
{
    temp_celsius_min = (valeur_min - 32) * 5 / 9;
    temp_celsius_max = (valeur_max - 32) * 5 / 9;
}

void Intervalle (double valeur_entree)
{
    if (valeur_entree < temp_min)
    {
        affichage = "min";
    }
    else if (valeur_entree > temp_max)
    {
        affichage = "max";
    }
    else
    {
        affichage = "poursuite";
    }
}
// FIN FONCTIONS
