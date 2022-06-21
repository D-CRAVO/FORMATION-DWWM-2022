<?php

function getSum (int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La somme de '. $nb1 . ' et de ' . $nb2 . ' est de ' . getSum($nb1, $nb2);

function getSub (int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La soustraction de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getSub($nb1, $nb2);

// Retourner la multiplication de deux valeurs.

function getMulti(float $nb1, float $nb2) : float
{
    return number_format($nb1 * $nb2, 2);
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La multiplication de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getMulti($nb1, $nb2);

// Division de deux valeurs

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
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La division de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getDiv($nb1, $nb2);