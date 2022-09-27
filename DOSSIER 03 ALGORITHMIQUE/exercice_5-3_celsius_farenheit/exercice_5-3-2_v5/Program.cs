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
    affichage = "quit";
    if (unite != "quit")
    {
        do
        {
            Console.Write("Veuillez saisir la valeur minimum : ");
            valeur_min = double.Parse(Console.ReadLine());
            if (valeur_min < temp_min)
            {
                affichage = "min";
            }
            else if (valeur_min > temp_max)
            {
                affichage = "max";
            }
            else
            {
                affichage = "poursuivre";
            }
            if (valeur_min > temp_min || valeur_min < temp_max)
            {
                Console.WriteLine(Affichage(affichage));
            }
        } while (valeur_min < temp_min || valeur_min > temp_max);

        do
        {
            Console.Write("Veuillez saisir la valeur maximum : ");
            valeur_max = double.Parse(Console.ReadLine());
            if (valeur_max < temp_min)
            {
                affichage = "min";
            }
            else if (valeur_max > temp_max)
            {
                affichage = "max";
            }
            else
            {
                affichage = "poursuivre";
            }
            if (valeur_min > temp_min || valeur_min < temp_max)
            {
                Console.WriteLine(Affichage(affichage));
            }
        } while (valeur_max < temp_min || valeur_max > temp_max);
        Affichage(affichage);

        if (unite == "c")
        {
            temp_farenheit_min = ConversionCF(valeur_min);
            temp_farenheit_max = ConversionCF(valeur_max);
            //ConversionCF2(valeur_min, valeur_max);
            affichage = "celsius";
        }
        else
        {
            temp_celsius_min = ConversionFC(valeur_min);
            temp_celsius_max = ConversionFC(valeur_max);
            //ConversionFC2(valeur_min, valeur_max);
            affichage = "farenheit";
        }
    }
    Affichage(affichage);
} while (unite != "quit");


// FIN PROGRAMME

// DEBUT FONCTIONS

string Affichage(string valeur_entree)
{
    string message = "";
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
            message = "Vous êtes en dessous de la valeur minimale";
            //Console.WriteLine("Vous êtes en dessous de la valeur minimale");
            //Console.WriteLine();
            break;
        case "max":
            message = "Vous êtes au dessus de la valeur maximale";
            //Console.WriteLine("Vous êtes au dessus de la valeur maximale");
            //Console.WriteLine();
            break;
        case "poursuivre":
            message = "Vous pouvez poursuivre !";
            //Console.WriteLine("Vous pouvez poursuivre !");
            //Console.WriteLine();
            break;
        default:
            //message = "Aurevoir !";
            Console.WriteLine("Aurevoir !");
            break;
    }
return message;
}

double ConversionCF (double temp_celsius)
{
    double temp_farenheit = (temp_celsius * 9 / 5) + 32;
    return temp_farenheit;
}

double ConversionFC (double temp_farenheit)
{
    double temp_celsius = (temp_farenheit - 32) * 5 / 9;
    return temp_celsius;
}

void ConversionCF2(double valeur_min, double valeur_max)
{
    temp_farenheit_min = (valeur_min * 9 / 5) + 32;
    temp_farenheit_max = (valeur_max * 9 / 5) + 32;
}

void ConversionFC2(double valeur_min, double valeur_max)
{
    temp_celsius_min = (valeur_min - 32) * 5 / 9;
    temp_celsius_max = (valeur_max - 32) * 5 / 9;
}

void Intervalle(double valeur_entree)
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
