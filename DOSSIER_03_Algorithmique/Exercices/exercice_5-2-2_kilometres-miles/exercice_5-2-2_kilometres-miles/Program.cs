// VARIABLES
string valeur_saisie = "  ";
string unite = "km";
string end = "Aurevoir !";

double valeur_kilometres = 0;
double valeur_miles = 0;
double valeur_minimale = 0.01;
double valeur_maximale = 1000000;


// PROGRAMME
do
{
    // On récupère la valeur à convertir.
    Console.WriteLine("Veuillez saisir une valeur en kimomètres comprise entre " + valeur_minimale + " et " + valeur_maximale + " : ");
    valeur_saisie = Console.ReadLine().ToLower();
    // On vérifie si l'utilisateur veut quitter l'application.
    if (valeur_saisie == "q")
    {
        Console.WriteLine(end);
        break;
    }
    else
    {
        // On vérifie les deux derniers caractères saisis pour connaitre l'unité.
        unite = valeur_saisie.Substring(valeur_saisie.Length-2, 2);
        if (unite == "mi" )
        {
            valeur_miles = double.Parse(valeur_saisie.Substring(0,valeur_saisie.Length-2));
            // On vérifie les conditions d'intervalle.
            if (valeur_miles < valeur_minimale)
            {
                Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
            }
            else
            {
                if (valeur_miles >= valeur_maximale)
                {
                    Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
                }
                else
                {
                    // On converti les miles en kilomètre par défaut.
                    valeur_kilometres = valeur_miles / 1.609;
                    Console.WriteLine("La conversion de " + valeur_miles + " miles en kilomètres donne : {0:#,###0.000} kms.", valeur_kilometres);
                }
            }
        }
        else
        {
            if (unite == "km")
            {
                valeur_kilometres = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length - 2));
            }
            else
            {
                valeur_kilometres = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length));
            }
            // On convertit les kilomètres en miles.
            valeur_miles = 1.609 * valeur_kilometres;
            Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.000} miles", valeur_miles);
        }
    }
} while (valeur_saisie != "q" || valeur_kilometres <= valeur_minimale || valeur_kilometres >= valeur_maximale);

