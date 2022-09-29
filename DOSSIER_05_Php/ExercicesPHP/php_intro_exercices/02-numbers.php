<?php

// ********** RETOURNER LA SOMME DE DEUX VALEURS. ***************
echo PHP_EOL . 'Retourner la somme de deux valeurs.' . PHP_EOL;

/**
 * 
 * Return the sum of two values.
 * 
 * @return int sum of two values
 * @param int two values
 * @author David CRAVO
 */
function getSum (int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

// Recovery of user data.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Display of the result.
echo 'La somme de '. $nb1 . ' et de ' . $nb2 . ' est de ' . getSum($nb1, $nb2) . PHP_EOL;



// ********** RETOURNER LA SOUSTRACTION DE DEUX VALEURS. ***********
echo PHP_EOL . 'Retouner la soustraction de deux valeurs.' . PHP_EOL;

/**
 * Subtract two values.
 * 
 * @return int substract of two values
 * @param int two values
 * @author David CRAVO
 */
function getSub (int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

// Recovery of user data.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Display of the result.
echo 'La soustraction de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getSub($nb1, $nb2) . PHP_EOL;



// ********** RETOURNER LA MULTIPLICATION DE DEUX VALEURS. **************
echo PHP_EOL . 'Retourner la multiplication de deux valeurs.' . PHP_EOL;

/**
 * 
 * Return the multiplication of two values.
 * 
 * @return float multiplication of two values
 * @param float two values
 * @author David CRAVO
 */
function getMulti(float $nb1, float $nb2) : float
{
    return floatval(number_format($nb1 * $nb2, 2, ',', ''));
}

// Recovery of user data.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Display of the result.
echo 'La multiplication de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getMulti($nb1, $nb2) . PHP_EOL;



// *********** RETOURNER LA DIVISION DE DEUX VALEURS. *************
echo PHP_EOL . 'Retouner la division de deux valeurs.' . PHP_EOL;

/**
 * 
 * Return the division of two values.
 * 
 * @return float division of two values
 * @param int two values
 * @author David CRAVO
 */
function getDiv(int $nb1, int $nb2) : float
{
    if ($nb2 === 0)
    {
        return 0;
    }
    else
    {
        return floatval(number_format($nb1 / $nb2 , 2, ',', ' '));
    }
}

// Recovery of user data.
$nb1 = readline('Veuillez saisir le nombre 1 : ');
$nb2 = readline('Veuillez saisir le nombre 2 : ');

// Display of the result.
echo 'La division de ' . $nb1 . ' par ' . $nb2 . ' donne ' . getDiv($nb1, $nb2) . PHP_EOL;