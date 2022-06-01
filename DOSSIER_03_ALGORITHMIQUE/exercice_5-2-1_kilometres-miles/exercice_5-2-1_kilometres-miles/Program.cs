// EXERCICE 5.2 CONVERSION KILOMETRES MILES

// Exercice 5.2.1 conversion de kilomètres en miles.

// VARIABLES

bool ok;

string end = "Aurevoir !";

double valeur_saisie;
double valeur_kilometres = 0;
double valeur_miles;
double valeur_minimale = 0.01;
double valeur_maximale = 1000000;


// PROGRAMME
do
{
    do
    {
        // On demande à l'utilisateur de saisir une valeur de kilomètres à convertir en miles.
        Console.Write("Veuillez saisir une valeur en kimomètres comprise entre " + valeur_minimale + " et " + valeur_maximale + " : ");
        ok = double.TryParse(Console.ReadLine().ToLower().Replace(".", ",").Replace("q","-1,000009"), out valeur_saisie);
    } while (!ok);
    // On vérifie si l'utilisateur veut sortir du programme.
    if (valeur_saisie == -1.000009)
    {
        Console.WriteLine(end);
        break;
    }
    else
    {
        // On vérifie que la valeur est bien comprise entre la valeur minimale et la valeur maximale.
        valeur_kilometres = valeur_saisie;
        if (valeur_kilometres <= valeur_minimale)
        {
            Console.WriteLine();
            Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
        }
        else
        {
            if (valeur_kilometres >= valeur_maximale)
            {
                Console.WriteLine();
                Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
            }
            else
            {
                // On effectue la conversion et on affiche le résultat.
                valeur_miles = 1.609 * valeur_kilometres; 
                Console.WriteLine();
                Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.0000} miles.", valeur_miles);
                Console.WriteLine();
            }
        }
        
    }
    
} while (valeur_saisie != -1.000009 || valeur_kilometres <= valeur_minimale || valeur_kilometres >= valeur_maximale);

