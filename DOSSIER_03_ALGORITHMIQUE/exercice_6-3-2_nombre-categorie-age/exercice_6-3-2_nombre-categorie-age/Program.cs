// EXERCICE 6.3 CALCUL DU NOMBRE DE PERSONNES

// Exercice 6.3.2 Afficher le nombre de personnes de chaque catégorie.

// VARIABLES

int nombre_personnes = 20;
int age_jeune = 20;
int moins_age_jeune = 0;
int egal_age_jeune = 0;
int plus_age_jeune = 0;
int compteur;

double[] age_personne = new double[nombre_personnes];

// DEBUT PROGRAMME

// On récupère le nombre de personnes de l'échantillon.
Console.Write("Veuillez indiquer le nombre de personnes de l'échantillon : ");
nombre_personnes = int.Parse(Console.ReadLine());

// On récupère et on analyse l'âge des personnes.
for (compteur = 0; compteur < nombre_personnes; compteur++)
{
    // On affiche (compteur + 1) pour ne pas perturber l'utilisateur.
    Console.Write("Veuillez saisir l'âge de la personne" + (compteur + 1) + " : ");
    age_personne[compteur] = double.Parse(Console.ReadLine());

    // On contrôle l'age de la personne.
    if (age_personne[compteur] < age_jeune)
    {
        moins_age_jeune++;
    }
    else if (age_personne[compteur] > age_jeune)
    {
        plus_age_jeune++;
    }
    else
    {
        egal_age_jeune++;
    }
}

// On affiche les résultats.
if (moins_age_jeune == nombre_personnes)
{
    Console.WriteLine("Toutes les personnes ont moins de " + age_jeune + " ans.");
}
else if (plus_age_jeune + egal_age_jeune == nombre_personnes)
{
    Console.WriteLine("Toutes les personnes ont plus de " + age_jeune + " ans.");
}
else
{
    Console.WriteLine(moins_age_jeune + " personnes ont moins de " + age_jeune + " ans.");
    Console.WriteLine(egal_age_jeune + " personnes ont " + age_jeune + " ans.");
    Console.WriteLine(plus_age_jeune + " personnes ont plus de " + age_jeune + " ans.");
}
