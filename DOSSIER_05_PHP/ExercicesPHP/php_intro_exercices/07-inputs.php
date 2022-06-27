<?php

$texte = readline('Veuillez saisir votre texte : ');

/**
 * Contrôle de saisie.
 *
 * @param string $texte
 * @return boolean
 * @author David CRAVO <contact@davidcravo.fr>
 */
function stringLength(string $texte) : bool
{
    if (strlen($texte < 9))
    {
        return false;
    }
    else
    {
        return true;
    }
}

stringLength($texte);