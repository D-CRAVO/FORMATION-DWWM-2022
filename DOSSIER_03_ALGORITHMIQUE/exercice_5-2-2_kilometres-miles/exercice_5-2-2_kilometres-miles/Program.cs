// VARIABLES
string valeur_saisie = "";
string unite = "km";
string end = "Aurevoir !";

double valeur_kilometres = 0;
double valeur_miles = 0;
double valeur_minimale = 0.01;
double valeur_maximale = 1000000;


// PROGRAMME
do
{
    Console.WriteLine("Veuillez saisir une valeur en kimomètres comprise entre " + valeur_minimale + " et " + valeur_maximale + " : ");
    valeur_saisie = Console.ReadLine().ToLower();
    if (valeur_saisie == "q")
    {
        Console.WriteLine(end);
        break;
    }
    else
    {
        unite = valeur_saisie.Substring(valeur_saisie.Length, 2);
        if (unite == "mi" )
        {
            valeur_kilometres = double.Parse(valeur_saisie);
            if (valeur_kilometres <= valeur_minimale)
            {
                Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
            }
            else
            {
                if (valeur_kilometres >= valeur_maximale)
                {
                    Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
                }
                else
                {
                    valeur_miles = 1.609 * valeur_kilometres;
                    Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : " + valeur_miles);
                }
            }
        }
        else
        {
            valeur_kilometres = valeur_miles / 1.609;
        }

    }

} while (valeur_saisie != "q" || valeur_kilometres <= valeur_minimale || valeur_kilometres >= valeur_maximale);

