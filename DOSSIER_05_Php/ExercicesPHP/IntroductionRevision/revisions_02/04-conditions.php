<?php

/**
 * Retourne "true" si la personne est majeure,
 * Et "false" si la personne est mineure.
 *
 * @param integer $age
 * @return boolean
 */
function isMajor(int $age) : bool
{
    $ageMajor = 18;
    if ($age >= $ageMajor)
    {
        return true;
    }
    else
    {
        return false;
    }
}


/**
 * Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite.
 *
 * @param integer $age
 * @return string
 */
function getRetired(int $age) : string
{
    $ageRetired = 60;
    if ($age < 0)
    {
        return 'Vous n\'êtes pas encore né !';
    }
    else if ($age < $ageRetired)
    {
        $diff = $ageRetired - $age;
        return 'Il vous reste ' . $diff . ' années avant la retraite.';
    }
    else if ($age === $ageRetired)
    {
        return 'Vous êtes à la retraite cette année.';
    }
    else 
    {
        $diff =  $age - $ageRetired;
        return 'Vous êtes à la retraite depuis ' . $diff . ' années.';
    }  
}

/**
 * Retourne la valeur du plus grand des 3 nombres.
 *
 * @param float $a
 * @param float $b
 * @param float $c
 * @return string
 */
function getMax(float $a, float $b, float $c) : string
{
    $a = ROUND($a, 3);
    $b = ROUND($b, 3);
    $c = ROUND($c, 3);
    if (($a === $b) || ($a === $c) || ($b === $c))
    {
        return 0;
    }
    else if ($a > $b)  // a > b 
    {
        if ($b > $c)        
        {
            return "$a > $b > $c";      // a > b > c
        }
        else  
        {
            if ($a > $c)    
            {
                return "$a > $c > $b";  // a > c > b
            }
            else            
            {
                return "$c > $a > $b";  // c > a > b
            }
        }
    }
    else    // b > a
    {
        if ($c > $b)        
        {
            return "$c > $b > $a";      // c > b > a
        }
        else // b > c
        {
            if ($a > $c )
            {
                return "$b > $a > $c";  // b > a > c
            }
            else 
            {
                return "$b > $c > $a";  // b > c > a
            }
        }
    }
}

function capitalCity(string $country) : string
{
    switch ($country)
    {
        case 'France' :
            return 'Paris';
            break;
        case 'Allemagne' :
            return 'Berlin';
            break;
        case 'Italie' :
            return 'Rome';
            break;
        case 'Espagne' :
            return 'Madrid';
            break;
        case 'Portugal' :
            return 'Lisbonne';
            break;
        default :
            return 'Capitale inconnue';
    }
}

echo PHP_EOL;
echo isMajor(12) . PHP_EOL; 
echo isMajor(18) . PHP_EOL; 
echo isMajor(42) . PHP_EOL;
echo PHP_EOL;
echo getRetired(12) . PHP_EOL;
echo getRetired(60) . PHP_EOL;
echo getRetired(72) . PHP_EOL;
echo getRetired(-2) . PHP_EOL;
echo PHP_EOL;
echo getMax(1,1,1) . PHP_EOL;
echo getMax(1,1,0) . PHP_EOL;
echo getMax(1,0,1) . PHP_EOL;
echo getMax(0,1,1) . PHP_EOL;
echo getMax(1,2,3) . PHP_EOL;
echo getMax(2,3,1) . PHP_EOL;
echo getMax(3,1,2) . PHP_EOL;
echo getMax(3,2,1) . PHP_EOL;
echo getMax(2,3,1) . PHP_EOL;
echo getMax(2,1,3) . PHP_EOL;
echo getMax(2.22222,1.11111,3.33333) . PHP_EOL;
echo PHP_EOL;
echo capitalCity('France') . PHP_EOL;
echo capitalCity('Espagne') . PHP_EOL;
echo capitalCity('Angleterre') . PHP_EOL;
echo PHP_EOL;

