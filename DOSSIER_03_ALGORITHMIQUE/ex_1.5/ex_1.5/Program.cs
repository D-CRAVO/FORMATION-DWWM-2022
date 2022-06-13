// EXERCICE 1.5 CALCUL DE LA SURFACE D'UN SECTEUR CIRCULAIRE

// VARIABLES

float rayon;
float angle;
double aire;

// DEBUT PROGRAMME

// Récupération des saisis utilisateur.
Console.Write("Veuillez saisir le rayon du secteur circulaire : ");
rayon = float.Parse(Console.ReadLine());
Console.Write("Veuillez saisir l'angle du secteur circulaire : ");
angle = float.Parse(Console.ReadLine());

// Calcul de la surface.
aire = Math.PI * Math.Pow(rayon, 2) * angle / 360;

// Affichage du résultat.
Console.WriteLine("L'aire du secteur circulaire est de {0:#,###0.000} m2", aire);