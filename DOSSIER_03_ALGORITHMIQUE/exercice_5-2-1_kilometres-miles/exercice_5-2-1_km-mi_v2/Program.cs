// EXERCICE 5.2 CONVERSION KILOMETRES MILES

// Exercice 5.2.1 conversion de kilomètres en miles.

// VARIABLES

string end = "Aurevoir !";
string valeur_saisie;
double valeur_kilometres = 0;
double valeur_miles = 0;
double valeur_minimale = 0.01;
double valeur_maximale = 1000000;

// PROGRAMME

do
{
    // On demande à l'utilisateur de saisir une valeur de kilomètres à convertir en miles.
    Console.Write("Veuillez saisir une valeur en kimomètres comprise entre " + valeur_minimale + " et {0:#,###} : ", valeur_maximale);
    valeur_saisie = Console.ReadLine();

    if (valeur_saisie != "q")
    {
        valeur_kilometres = double.Parse(valeur_saisie);
        if (valeur_kilometres < valeur_minimale)
        {
            Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + ". ");
        }
        else if (valeur_kilometres > valeur_maximale)
        {
            Console.WriteLine("Vous êtes au dessus de la valeur maximale {0:#,###} .", valeur_maximale);

        }
        else
        {
            valeur_miles = 1.609 * valeur_kilometres;
            Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.0000} miles.", valeur_miles);
        }
    }

} while (valeur_saisie != "q");
Console.WriteLine(end);
