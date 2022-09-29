// VARIABLES
int nombre = 6;
int compteur_1 = 0;
int compteur_2;
int somme = 0;
int nb_nombre_parfait = 4;

// PROGRAMME    
do
{
    do
    {
        somme = 0;
        for (compteur_2 = 1; compteur_2 < nombre; compteur_2++)
        {
            if (nombre % compteur_2 == 0)
            {
                somme = somme + compteur_2;
            }
        }
        if (somme == nombre)
        {
            Console.WriteLine(nombre + " est un nombre parfait.");
        }
        nombre++;
    } while (compteur_2 < nombre);
    compteur_1++;
} while (compteur_1 < nb_nombre_parfait);
