<?php

function getSub (int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');
echo 'La soustraction de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getSub($nb1, $nb2);