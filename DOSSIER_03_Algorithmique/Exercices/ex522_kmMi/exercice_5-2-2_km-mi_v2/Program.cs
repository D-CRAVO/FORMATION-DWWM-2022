// EXERCICE 5.2.2 CONVERSION KILOMETRES MILES

// VARIABLES

string valeur_saisie = "  ";
string unite = "km";
string end = "Aurevoir !";

double valeur_kilometres = 0;
double valeur_miles = 0;
double valeur_minimale = 0.01;
double valeur_maximale = 1000000;

// DEBUT PROGRAMME

do
{
    // On récupère la valeur à convertir.
    Console.WriteLine("Veuillez saisir une valeur comprise entre " + valeur_minimale + " et " + valeur_maximale + " suivi de son unité (mi ou km): ");
    valeur_saisie = Console.ReadLine().ToLower();
    // On vérifie si l'utilisateur veut quitter l'application.
    if (valeur_saisie != "q")
    {
        // Postulat : l'utilisateur ne saisi pas d'espace entre la valeur numérique et l'unité.
        if (valeur_saisie.Length > 1)
        {
            // On vérifie les deux derniers caractères saisis pour connaitre l'unité.
            unite = valeur_saisie.Substring(valeur_saisie.Length - 2, 2);
            if (unite == "mi")
            {

                valeur_miles = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length - 2));

                // On vérifie les conditions d'intervalle.
                if (valeur_miles < valeur_minimale)
                {
                    Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
                }
                else if (valeur_miles > valeur_maximale)
                {
                    Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
                }
                else
                {
                    // On converti les miles en kilomètres.
                    valeur_kilometres = valeur_miles / 1.609;
                    Console.WriteLine("La conversion de " + valeur_miles + " miles en kilomètres donne : {0:#,###0.000} kms.", valeur_kilometres);
                }
            }
            else
            {
                if (unite == "km")
                {
                    valeur_kilometres = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length - 2));

                    // On vérifie les conditions d'intervalle.
                    if (valeur_kilometres < valeur_minimale)
                    {
                        Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
                    }
                    else if (valeur_kilometres > valeur_maximale)
                    {
                        Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
                    }
                    else
                    {
                        // On convertit les kilomètres en miles.
                        valeur_miles = 1.609 * valeur_kilometres;
                        Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.000} miles", valeur_miles);
                    }
                }
                else
                {
                    valeur_kilometres = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length));
                    // On vérifie les conditions d'intervalle.
                    if (valeur_kilometres < valeur_minimale)
                    {
                        Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
                    }
                    else if (valeur_kilometres > valeur_maximale)
                    {
                        Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
                    }
                    else
                    {
                        // On convertit les kilomètres en miles.
                        valeur_miles = 1.609 * valeur_kilometres;
                        Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.000} miles", valeur_miles);
                    }

                }
            }
        }
        else
        {
            valeur_kilometres = double.Parse(valeur_saisie.Substring(0, valeur_saisie.Length));
            // On vérifie les conditions d'intervalle.
            if (valeur_kilometres < valeur_minimale)
            {
                Console.WriteLine("Vous êtes en dessous de la valeur minimale " + valeur_minimale + " .");
            }
            else if (valeur_kilometres > valeur_maximale)
            {
                Console.WriteLine("Vous êtes au dessus de la valeur maximale " + valeur_maximale + " .");
            }
            else
            {
                // On convertit les kilomètres en miles.
                valeur_miles = 1.609 * valeur_kilometres;
                Console.WriteLine("La conversion de " + valeur_kilometres + " kilomètres en miles donne : {0:#,###0.000} miles", valeur_miles);
            }
        }
    }
} while (valeur_saisie != "q");
Console.WriteLine(end);


// FIN PROGRAMME

// JEU D'ESSAI

// 0
// 0,01
// 1
// 10
// 1000000
// 10000000

// 0mi
// 0,01mi
// 1mi
// 10mi
// 1000000
// 10000000mi

// 0km
// 0,01km
// 1km
// 10km
// 1000000
// 10000000km
