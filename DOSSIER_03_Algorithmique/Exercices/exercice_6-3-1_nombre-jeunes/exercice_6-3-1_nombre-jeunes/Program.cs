// EXERCICE 6.3 CALCUL DU NOMBRE DE PERSONNES

// Exercice 6.3.1 Calculer le nombre de jeunes

// VARIABLES

int nombre_personnes = 5;   // On détermine le nombre de personnes de l'échantillon pour pouvoir tester plus rapidement.
int age_jeune = 20;         // On détermine l'age en dessous duquel la personne est jeune.
int compteur;
int nombre_jeunes = 0;

double[] age_personne = new double[nombre_personnes];

Console.Write("Veuillez saisir le nombre de personnes : ");
nombre_personnes = int.Parse(Console.ReadLine());

// On récupère les saisies utilisateur.
for (compteur = 0; compteur < nombre_personnes; compteur++)
{
    // On affiche (compteur + 1) pour ne pas perturber l'utilisateur.
    Console.Write("Veuillez saisir l'âge de la personne " + (compteur + 1) + " : ");
    age_personne[compteur] = double.Parse(Console.ReadLine());

    // On vérifie avec l'âge de la personne si elle est jeune.
    if (age_personne[compteur] <= age_jeune)
    {
        nombre_jeunes++;
    }
}

// On affiche le résultat.
Console.WriteLine("Il y a " + nombre_jeunes + " jeunes dans votre échantillon.");
