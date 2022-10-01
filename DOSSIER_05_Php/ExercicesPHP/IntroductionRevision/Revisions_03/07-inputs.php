<?php


/**
 *  Vérifie la longueur d'une chaine de caractères.
 *
 * @param string $string
 * @return boolean
 */
function stringLength(string $string) : bool
{
    $strLength = 9;
    if (strlen($string) < $strLength)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}


function haveNumber(string $string) : bool
{
    $pattern = '/[0-9]/';
    if (preg_match($pattern, $string))
    {
        $result = true;
    }
    else 
    {
        $result = false;
    }
    return $result;
}

function haveLower(string $string) : bool
{
    $pattern = '/[a-z]/';
    if (preg_match($pattern, $string))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function haveUpper(string $string) : bool
{
    $pattern = '/[A-Z]/';
    if (preg_match($pattern, $string))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function haveNonChar(string $string) : bool
{
    $pattern = '/[^A-Za-z1-9]/';
    if (preg_match($pattern, $string))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function passwordCheck(string $password) : bool
{
    if (!stringLength($password))
    {
        echo 'Saisir 9 caractères';
        $result = false;
    }
    else if (!haveNumber($password))
    {
        echo 'Saisir 1 chiffre';
        $result = false;
    }
    else if (!haveLower($password))
    {
        echo 'Saisir une minuscule';
        $result = false;
    }
    else if (!haveUpper($password))
    {
        echo 'Saisir une majuscule';
        $result = false;
    }
    else if (!haveNonChar($password))
    {
        echo 'Saisir un caractère spécial';
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}

echo ' stringLength : '; echo stringLength('azer');
echo ' stringLength : '; echo stringLength('motDePasse') . PHP_EOL;

echo ' haveNumber : '; echo haveNumber('essai'); 
echo ' haveNumber : '; echo haveNumber('essai1') . PHP_EOL; 
echo ' haveLower : '; echo haveLower('ESSAI') ;
echo ' haveLower : '; echo haveLower('ESSAi') . PHP_EOL;
echo ' haveUpper : '; echo haveUpper('essai');
echo ' haveUpper : '; echo haveUpper('essaI') . PHP_EOL;
echo ' haveNonChar : '; echo haveNonChar('essai');
echo ' haveNonChar : '; echo haveNonChar('essai!') . PHP_EOL;

echo ' passwordCheck : '; echo passwordCheck('azerty') . PHP_EOL;
echo ' passwordCheck : '; echo passwordCheck('azertyyyy') . PHP_EOL;
echo ' passwordCheck : '; echo passwordCheck('AZERTYYYY1') . PHP_EOL;
echo ' passwordCheck : '; echo passwordCheck('azertyyyy1') . PHP_EOL;
echo ' passwordCheck : '; echo passwordCheck('azertyyyY1') . PHP_EOL;
echo ' passwordCheck : '; echo passwordCheck('azertyyyY1!') . PHP_EOL;
