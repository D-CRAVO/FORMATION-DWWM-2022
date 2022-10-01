// EXERCICE 5.3.1 CONVERSION DEGRES FARENHEIT DEGRES CELSIUS

// VARIABLES

string valeur_saisie;
string unite;
string affichage;

double temperature_saisie;
double temperature_celsius = 0;
double temperature_farenheit = 0;
double temperature_min = -459.67;
double temperature_max = 5000000;

// DEBUT PROGRAMME

do
{
    Console.Write("Veuillez saisir une temperature comprise entre {0:#,##0.00}", temperature_min);
    Console.WriteLine(" et {0:#,###} ", temperature_max);
    Console.Write("suivi d'un espace et de son unité (F/C): ");
    valeur_saisie = Console.ReadLine().ToUpper();
    temperature_saisie = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length - 2));
    unite = valeur_saisie.Substring(valeur_saisie.Length - 1, 1);

    if (temperature_saisie < temperature_min)
    {
        affichage = "min";
    }
    else
    {
        if (temperature_saisie > temperature_max)
        {
            affichage = "max";
        }
        else
        {
            if (unite == "C")
            {
                TemperatureF(temperature_saisie);
                affichage = "farenheit";
            }
            else
            {
                TemperatureC(temperature_saisie);
                affichage = "celsius";
            }
        }
    }
    Affichage(affichage);

} while (temperature_saisie < temperature_min || temperature_saisie > temperature_max);


// FIN PROGRAMME

// DEBUT FONCTIONS

void TemperatureF (double valeur_entree)
{
    temperature_farenheit = (valeur_entree - 32) * 5 / 9;
}


void TemperatureC(double valeur_entree)
{
    temperature_celsius = (valeur_entree * 9 / 5) + 32;
}

void Affichage(string valeur_entree)
{
    switch (valeur_entree)
    {
        case "min":
            Console.WriteLine("Vous êtes en dessous de la valeur minimale");
            Console.WriteLine();
            break;
        case "max":
            Console.WriteLine("Vous êtes au dessus de la valeur maximale");
            Console.WriteLine();
            break;
        case "farenheit":
            Console.WriteLine("La température en degrés Farenheit est : {0:#,##0.00} °F", temperature_farenheit);
            Console.WriteLine();
            break;
        default :
            Console.WriteLine("La température en degrés Celsius est : {0:#,##0.00} °C", temperature_celsius);
            Console.WriteLine();
            break;
    }
}

// FIN FONCTIONS

// JEU D'ESSAI

// -460,00 C
// -457,67 C
// -100 C
// 0 C
// 1000 C
// 5000000 C
// 5000001 C

// -460,00 F
// -457,67 F
// -273,15 F
// -100 F
// 0 F
// 1000 F
// 5000000 F
// 5000001 F