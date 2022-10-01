<?php


/**
 * retourne un booléen qui vaut true si la chaine de caractères contient au moins 9 caractères 
 * et false si elle contient moins de 9 caractères.
 *
 * @param string $string
 * @return boolean
 */
function stringLength(string $string) : bool
{
    if (strlen($string) < 9)
    {
        return false;
    }
    else
    {
        return true;
    }
}

echo stringLength('motDePasse') . PHP_EOL;
echo stringLength('azer') . PHP_EOL;