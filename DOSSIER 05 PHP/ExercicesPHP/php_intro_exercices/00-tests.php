<?php 


function pluraliser(string $chaine, int $nb) 
{
    return $chaine.($nb > 1 ? 's' : '').PHP_EOL;
}

echo pluraliser('année', 0);
echo pluraliser('année', 1);

$valeur = pluraliser('année', 58);

echo $valeur;