// EXERCICE 1.4 CALCUL DE L'AIRE ET DU VOLUME D'UNE SPHERE

// VARIABLES

float rayon;
double aire;
double volume;

// DEBUT PROGRAMME

// Récupération des données utilisateur.
Console.Write("Veuillez saisir le rayon de la sphère : ");
rayon = float.Parse(Console.ReadLine());

// Calculs de l'aire et du volume.
aire = 4 * Math.PI * Math.Pow(rayon,2);
volume = 4/3 * Math.PI * Math.Pow(rayon,3);

// Affichage des résultats.
Console.WriteLine("L'aire de la sphère est de {0:0.000} m2.", aire);
Console.WriteLine("Le volume de la shère est de {0:0.000} m3", volume);