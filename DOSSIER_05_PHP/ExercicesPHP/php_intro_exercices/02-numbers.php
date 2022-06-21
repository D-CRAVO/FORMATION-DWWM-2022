<?php
// RETOURNER LA SOMME DE DEUX VALEURS.
echo PHP_EOL . 'Retourner la somme de deux valeurs.' . PHP_EOL;

// Fonction pour calculer la somme.
function getSum (int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

// Récupération des données utilisateurs.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Affichage du résultat.
echo 'La somme de '. $nb1 . ' et de ' . $nb2 . ' est de ' . getSum($nb1, $nb2) . PHP_EOL;


// RETOURNER LA SOUSTRACTION DE DEUX VALEURS.
echo PHP_EOL . 'Retouner la soustraction de deux valeurs.' . PHP_EOL;

// Fonction soustraction de deux nombres.
function getSub (int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

// Récupération des données utilisateurs.

$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Affichage du résultat.
echo 'La soustraction de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getSub($nb1, $nb2) . PHP_EOL;


// RETOURNER LA MULTIPLICATION DE DEUX VALEURS.
echo PHP_EOL . 'Retourner la multiplication de deux valeurs.' . PHP_EOL;

// Fonction multiplication de deux valeurs.
function getMulti(float $nb1, float $nb2) : float
{
    return number_format($nb1 * $nb2, 2);
}

// Récupération des données utilisateurs.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Affichage du résultat.
echo 'La multiplication de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getMulti($nb1, $nb2) . PHP_EOL;


// RETOURNER LA DIVISION DE DEUX VALEURS.
echo PHP_EOL . 'Retouner la division de deux valeurs.' . PHP_EOL;

// Calcul de la division.
function getDiv(int $nb1, int $nb2) : float
{
    if ($nb2 === 0)
    {
        return 0;
    }
    else
    {
        return number_format($nb1 / $nb2 , 2);
    }
}

// Récupération des données utilisateurs.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Affichage du résultat.
echo 'La division de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getDiv($nb1, $nb2) . PHP_EOL;