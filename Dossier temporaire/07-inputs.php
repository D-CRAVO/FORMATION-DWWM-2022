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


/**
 * Vérifie la présence d'un chiffre dans la chaine de caractère.
 *
 * @param string $string
 * @return boolean
 */
function haveNumber(string $string) : bool
{
    $pattern = '/[0-9]/';
    $condition = preg_match($pattern,$string);
    if (!$condition)
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
 * Vérifie la présence d'une lettre en minuscule dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 */
function haveLower(string $string) : bool
{
    $pattern = '/[a-z]/';
    $condition = preg_match($pattern, $string);
    if (!$condition)
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
 * Vérifie la présence d'une lettre majuscule dans la chaine de caractères.
 *
 * @param string $string
 * @return boolean
 */
function haveUpper(string $string) : bool
{
    $pattern = '/[A-Z]/';
    $condition = preg_match($pattern, $string);
    if (!$condition)
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
 * Vérifie la présence d'un caractère spécial dans la chaine de caractère.
 *
 * @param string $string
 * @return boolean
 */
function haveNonChar(string $string) : bool
{
    $pattern = '/[^A-Za-z1-9]/';
    $condition = preg_match($pattern, $string);
    if (!$condition)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}

/*
function passwordCheck(string $password)
{
    if (!stringLength($password))
    {
        echo "Veuillez saisir au moins 9 caractères.";
        $result = false;
    }
    else if (!haveNumber($password))
    {
        echo "Veuillez saisir au moins 1 chiffre.";
        $result = false;
    }
    else if (!haveLower($password))
    {
        echo "Veuillez saisir au moins une minuscule";
        $result = false;
    }
    else if (!haveUpper($password))
    {
        echo "Veuillez saisir au moins une majuscule";
        $result = false;
    }
    else if (!haveNonChar($password))
    {
        echo "Veuillez saisir au moins un caractère spécial";
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}
*/


/**
 * Contrôle d'un mot de passe.
 *
 * @param string $password
 * @return void
 */
function passwordCheck(string $password)
{
    if (!stringLength($password))
    {
        $result = false;
    }
    else if (!haveNumber($password))
    {
        $result = false;
    }
    else if (!haveLower($password))
    {
        $result = false;
    }
    else if (!haveUpper($password))
    {
        $result = false;
    }
    else if (!haveNonChar($password))
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}

$users = [
    'joe' => 'Azer1234!', 
    'jack' => 'Azer-4321', 
    'admin' => '1234_Azer',
   ];


/*
function userLogin(string $user, string $password, array $users) : bool
{
    $result = false;
    if (array_key_exists($user, $users))
    {
        if (passwordCheck($password))
        {
            if($users[$user] === $password)
            {
                $result = true;
            }
        }
    }
    return $result;
}
*/


/**
 * Permet l'identification d'un utilisateur.
 *
 * @param string $user
 * @param string $password
 * @param array $users
 * @return void
 */
function userLogin(string $user, string $password, array $users)
{
    if (array_key_exists($user, $users))
    {
        if (passwordCheck($password))
        {
            if ($users[$user] === $password)
            {
                $result = true;
            }
            else
            {
                $result = false;
            }
        }
        else
        {
            $result = false;
        }
    }
    else
    {
        $result = false;
    }
    return $result;
}

echo 'stringLength : '; echo stringLength('motDePasse') . PHP_EOL;
echo 'stringLength : '; echo stringLength('azer') . PHP_EOL;

echo 'haveNumber : '; echo haveNumber('f=aT4~86Et*L') . PHP_EOL;
echo 'haveLower : '; echo haveLower('f=aT4~86Et*L') . PHP_EOL;
echo 'haveUpper : '; echo haveUpper('f=aT4~86Et*L') . PHP_EOL;
echo 'haveNonChar : '; echo haveNonChar('f=aT4~86Et*L') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('f=aT4~86Et*L') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('azerty') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('azertyyyy') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('azertyyyy1') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('azertyyyy1M') . PHP_EOL;
echo 'passwordCheck : '; echo passwordCheck('azertyyyy1M!') . PHP_EOL;

echo 'userLogin : '; echo userLogin('joe', 'Azer1234!', $users) . PHP_EOL;
echo 'userLogin : '; echo userLogin('jack', 'Azer-4321', $users) . PHP_EOL;
echo 'userLogin : '; echo userLogin('admin', '1234_Azer', $users) . PHP_EOL;
echo 'userLogin : '; echo userLogin('joe', 'Azer1134!', $users) . PHP_EOL;
