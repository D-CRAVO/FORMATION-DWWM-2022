<?php

// *******************************************************************************
echo PHP_EOL . 'Exercice 3.A Retourner le nom de l\'inventeur de E=MC²' . PHP_EOL;

/** 
 * 
 * Retourner le nom de l'inventeur de E=MC²
 * 
 * @return string answer with the name of the inventor.
 * @param string name of the inventor.
 * @author David CRAVO.
 */
function getMC2() : string
{
    // Recovery of user data.
    $name = ucfirst(readline('Quel est le nom de l\'inventeur de E=MC² ? '));
    return $name;
}

// Recovery the result.
$result = 'Le nom de l\'inventeur de E=MC² est ' . getMC2();

// Display of the result.
echo  $result . PHP_EOL;



// ********************************************************************************
echo PHP_EOL . 'Exercice 3.B Retourner la concaténation de deux valeurs' . PHP_EOL;

/**
 * 
 * Return the concatenation of two values.
 * 
 * @return string concatenation of two values.
 * @param string two values : $firstName and $name.
 * @author David CRAVO.
 */
function getUserName(string $firstName, string $name) : string
{
    return $firstName . $name;
}

// Recovery of user data.
$firstName = readline('Veuillez saisir votre prénom : ');
$name = readline('Veuillez saisir votre nom de famille : ');

// Recovery of the result.
$result = getUserName($firstName, $name);

// Display of the result.
echo $result . PHP_EOL;



// ********************************************************************************
echo PHP_EOL . 'Exercice 3.C Retourner la concaténation de deux valeurs' . PHP_EOL;

/**
 * 
 * Return the concatenation of two values.
 * 
 * @return string concatenation of $firstname and $name, $firstName in lowercase, $name in uppercase.
 * @param string two values : $firstName and $name.
 * @author David CRAVO.
 */
function getFullName(string $firstName, string $name) : string
{
    $name = strtoupper($name);
    $firstName = strtolower($firstName);
    return $firstName . ' ' . $name;
}

// Recovery of user data.
$firstName = readline('Veuillez saisir votre prénom : ');
$name = readline('Veuillez saisir votre nom de famille : ');

// Recovery the result.
$result = getFullName($firstName, $name);

// Display of the result.
echo $result . PHP_EOL;



// ************************************************************************
echo PHP_EOL . 'Exercice 3.D Retourner une chaine de caractères' . PHP_EOL;

/**
 * 
 * Return a string.
 * 
 * @return string concatenation using getFullName() and getMC2().
 * @param string two string : $name and $firstName.
 * @author David CRAVO.
 */

function askUser(string $firstName, string $name) : string
{
    return 'Bonjour ' . getFullName($firstName, $name) . '. Connaissez-vous ' . getMC2() . ' ?';
}

// Recovery of user data.
$firstName = readline('Veuillez saisir votre prénom : ');
$name = readline('Veuillez saisir votre nom de famille : ');

// Recovery the result.
$result = askUser($firstName, $name);

// Display of the result.
echo $result . PHP_EOL;