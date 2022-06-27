<?php

// ********************************************************
echo PHP_EOL . 'Exercice 7.A Controler la longueur de chaine' . PHP_EOL;

/**
 * Controler la longueur de la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function stringLength(string $string) : bool
{
    if (strlen($string) < 9)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


/**
 * Vérifier la présence d'un chiffre dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function haveNumber(string $string) : bool
{
    $pattern = '/\d/';
    $condition = preg_match($pattern, $string);
    if(!$condition)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


/**
 * Vérifier la présence d'une minuscule dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function haveLower(string $string) : bool
{
    $pattern = '/[a-z]/';
    $condition = preg_match($pattern, $string);
    if(!$condition)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


/**
 * Vérifier la présence d'une majuscule dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function haveUpper(string $string) : bool
{
    $pattern = '/[A-F]/';
    $condition = preg_match($pattern, $string);
    if(!$condition)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


/**
 *  Vérifier la présence d'un caractère spécial dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function haveNonChar(string $string) : bool
{
    $pattern = '/\W/';
    $condition = preg_match($pattern, $string);
    if(!$condition)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


// **************************************************************
echo PHP_EOL . 'Exercice 7.B Contrôler un mot de passe' . PHP_EOL;

function passwordCheck(string $password) : bool
{
    if (!stringLength($password))
    {
        echo "Veuillez saisir au moins 9 caractères." . PHP_EOL;
        $result = false;
    }
    else if (!haveNumber($password))
    {
        echo "Veuillez saisir au moins 1 chiffre." . PHP_EOL;
        $result = false;
    }
    else if (!haveLower($password))
    {
        echo "Veuillez saisir au moins 1 minuscule." . PHP_EOL;
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;        
}

$password = readline('Mot de passe : ');
echo passwordCheck($password) . PHP_EOL;