<?php

/**
 * Retourne le nom de l'inventeur de E=MC²
 *
 * @return string
 */
function getMC2() : string
{
    return 'Einstein';
}


/**
 * Retourne la concaténation de deux valeurs
 *
 * @param string $firstname
 * @param string $lastname
 * @return string
 */
function getUserName(string $firstname, string $lastname) : string
{
    return $firstname . $lastname;
}


/**
 * Retourne la concaténation des deux valeurs avec un espace entre les 2, 
 * le prénom en minuscule et le nom en MAJUSCULE
 *
 * @param string $lastname
 * @param string $firstname
 * @return string
 */
function getFullName(string $lastname, string $firstname) : string
{
    return $firstname . ' ' . strtoupper($lastname);
}


/**
 * Cette fonction doit retourner une chaîne de caractères sous la forme :
 * « Bonjour prénom, NOM. Connaissez-vous Einstein ? »
 *
 * @param string $lastname
 * @param string $firstname
 * @return string
 */
function askUser(string $lastname, string $firstname) : string
{
    return 'Bonjour ' . getFullname($lastname, $firstname) . '. Connaissez-vous ' . getMC2() . ' ?';
}


echo getMC2() . PHP_EOL;
echo getUserName('mickaël', 'devoldère') . PHP_EOL;
echo getFullName('devoldère', 'mickaël') . PHP_EOL;
echo askUser('cravo', 'david') . PHP_EOL;
