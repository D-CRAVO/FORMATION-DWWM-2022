<?php

// Retourner la multiplication de deux valeurs.

function getMulti(float $nb1, float $nb2) : float
{
    return number_format($nb1 * $nb2, 2);
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La multiplication de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getMulti($nb1, $nb2);