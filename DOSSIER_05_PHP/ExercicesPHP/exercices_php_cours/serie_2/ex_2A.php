<?php

function getSum (int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La somme de '. $nb1 . ' et de ' . $nb2 . ' est de ' . getSum($nb1, $nb2);