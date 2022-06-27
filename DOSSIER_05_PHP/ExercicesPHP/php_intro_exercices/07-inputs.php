<?php
// ********************************************************
echo PHP_EOL . 'Exercice 7.A Controler la longueur de chaine' . PHP_EOL;

/**
 * Controler la longueur de chaine.
 *
 * @param string $texte
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function stringLength(string $texte) : bool
{
    if (strlen($texte) < 9)
    {
        $result = false;
        return $result;
    }
    else
    {
        $result = true;
        return $result;
    }
}

/* $texte = readline('Veuillez saisir votre texte : ');
echo stringLength($texte); */



// **************************************************************
echo PHP_EOL . 'Exercice 7.B Contrôler un mot de passe' . PHP_EOL;

function passwordCheck(string $password) : bool
{
    if (stringLength($password))
    {
        $result_number = preg_match('/[^0-9]/', $password);
        if ($result_number)
        {
            
        }
    }

}