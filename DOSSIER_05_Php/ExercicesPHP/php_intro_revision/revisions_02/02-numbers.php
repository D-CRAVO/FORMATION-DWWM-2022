<?php


/**
 * Calcul de la somme de deux entiers
 *
 * @param integer $nb1
 * @param integer $nb2
 * @return integer
 */
function getSum(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}


/**
 * Calcul de la différence entre deux entiers
 *
 * @param integer $nb1
 * @param integer $nb2
 * @return void
 */
function getSub(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}


/**
 * Calcul de la multiplication de deux décimaux
 *
 * @param float $nb1
 * @param float $nb2
 * @return void
 */
function getMulti(float $nb1, float $nb2) : float
{
    return $nb1 * $nb2;
}


function getDiv(int $nb1, int $nb2) : float
{
    if ($nb2 === 0)
    {
        return 0;
    }
    else 
    {
        return floatval(( $nb1 / $nb2), 2);
    }
    
}

echo getSum(5,3) . PHP_EOL;

echo getSub(5,3) . PHP_EOL;
echo getSub(3,5) . PHP_EOL;

echo getMulti(5.6,3) . PHP_EOL;
echo getMulti(5.6,-3.7) . PHP_EOL;

echo getDiv(20,3) . PHP_EOL;
echo getDiv(20,0) . PHP_EOL;