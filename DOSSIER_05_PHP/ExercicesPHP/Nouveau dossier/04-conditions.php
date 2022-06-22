<?php
// ****************************************************
echo PHP_EOL . 'Exercice 4.A Es-tu majeur ?' . PHP_EOL;
// Créer une fonction « isMajor() » acceptant un argument de type int. Elle devra retourner un booléen. 
// Si l’âge est supérieur ou égal à 18, elle doit retourner true. Sinon elle doit retourner false

/**
 * Said if you are major or not.
 *
 * @return boolean
 * @author David CRAVO
 */
function isMajor() : bool
{
    $ageMajor = 18;
    $age = intval(readline('Veuillez saisir votre âge : '));
    if ($age >= $ageMajor)
    {
        $major = true;
    }
    else
    {
        $major = false;
    }
    return $major;
}

// Define the result 
// to "false" or "true" because isMajor() give "1" or nothing and not "true" or "false"
if (!isMajor())
{
    $result = "false";
}
else
{
    $result = "true";
}

// Display of the result.
echo $result . PHP_EOL;



//**************************************************
echo PHP_EOL . 'Exercice 4.B La retraite' . PHP_EOL;
// Créer une fonction « getRetired() » acceptant un argument de type int. Elle devra retourner un string. 
// Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite. 
// Pour cet exercice, l’âge de la retraite est fixé à 60 ans.

/**
 * Compare your age with your retirement age.
 *
 * @param integer $age
 * @return string
 * @author David CRAVO
 */
function getRetired(int $age) : string
{
    $ageRetired = intval(60);
    if ($age > $ageRetired)
    {
        $diff = $age - $ageRetired ;
        return 'Vous êtes à la retraite depuis ' . $diff . ' ans.';
    }
    else if ($age === $ageRetired)
    {
        return 'Vous êtes à la retraite cette année';
    }
    else if ($age > 0)
    {
        $diff = $ageRetired - $age;
        return 'Il vous reste ' . $diff . ' années avant la retraite';
    }
    else
    {
        return 'Vous n\'êtes pas encore né.';
    }
}

// User data recovery.
$age = intval(readline('Veuillez saisir votre âge : '));

// Recovery of the result.
$result = getRetired($age);

// Display of the result.
echo $result . PHP_EOL;



// ******************************************************************
echo PHP_EOL . 'Exercice 4.C Plus grand des trois nombres' . PHP_EOL;
// Créer une fonction « getMax() » acceptant 3 arguments de type float.
// Cette fonction doit retourner la valeur du plus grand des 3 nombres. Limitez le résultat à 3 décimales
// Si au moins 2 des valeurs fournies sont égales la fonction retourne 0.

/**
 * Find the great of three numbers
 *
 * @param float $nb1
 * @param float $nb2
 * @param float $nb3
 * @return float
 * @author David CRAVO
 */
function getMax(float $nb1, float $nb2, float $nb3) : float
{
    if ($nb1 === $nb2 || $nb1 === $nb3 || $nb2 === $nb3)
    {
        return 0;
    }
    if ($nb1 < $nb2)
    {
        if ($nb2 < $nb3)
        {
            // $nb1 < $nb2 < $nb3
            return $nb3;
        }
        else if ($nb1<$nb3) //$nb3 < $nb2
        {
            // $nb1 < $nb3 < $nb2
            return $nb2;
        }
        else 
        {
            // $nb3 < $nb1 < $nb2
            return $nb2;
        }
    }
    else // $nb2 < $nb1
    {
        if ($nb1 < $nb3)
        {
            // $nb2 < $nb1 < $nb3
            return $nb3;
        }
        else if ($nb2 < $nb3) // $nb3 < $nb1
        {
            // $nb2 < $nb3 < $nb1
            return $nb1;
        }
        else
        {
            // $nb3 < $nb2 < $nb1
            return $nb1;
        }
    }
}

// User data recovery.
$nb1 = floatval(readline('Veuillez saisir le nombre 1 : '));
$nb2 = floatval(readline('Veuillez saisir le nombre 2 : '));
$nb3 = floatval(readline('Veuillez saisir le nombre 3 : '));

// Recovery of the result.
$result = getMax($nb1, $nb2, $nb3);

// Display of the result
echo 'Le plus grand des trois nombres est : ' . $result . PHP_EOL;

// ******************************************************
echo PHP_EOL . 'Exercice 4.D Capitale de pays' . PHP_EOL;
// Créez une fonction « capitalCity() » qui accepte un argument de type string (le pays dont on cherche la capitale). 
// Elle devra retourner le nom de la capitale des pays suivants :
// France => Paris
// Allemagne => Berlin
// Italie => Rome
// Maroc => Rabat
// Espagne => Madrid
// Portugal => Lisbonne
// Angleterre => Londres
// Si le pays ne fait pas partie de la liste ci-dessus, la fonction retourne la valeur « Capitale inconnue ».

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
        case 'Maroc' :
            return 'Rabat';
            break;
        case 'Espagne' :
            return 'Madrid';
            break;
        case 'Portugal' :
            return 'Lisbonne';
            break;
        case 'Angleterre' :
            return 'Londres';
            break;
        default :
            return 'Capitale inconnue';
            break;
    }  
}

// User data recovery.
$country = readline('Veuillez saisir le nom d\'un pays : ');

// Recovery of the result.
$result = capitalCity($country);

// Display of the result
echo $result . PHP_EOL;