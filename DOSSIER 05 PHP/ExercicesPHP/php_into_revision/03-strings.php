<?php

function getMC2() : string
{
    $result = 'Einstein';
    return $result;
}

function getUserName(string $_prenom, string $_nom) : string
{
    $result = $_prenom . $_nom;
    return $result;
}

function getFullName(string $_prenom, string $_nom) : string
{
    $result = $_prenom . ' ' . strtoupper($_nom);
    return $result;
}

function askUser(string $_prenom, string $_nom) : string
{
    $result = 'Bonjour ' . getFullName($_prenom, $_nom) . ', connaissez-vous ' . getMC2() . ' ?';
    return $result;
}

echo getMC2() . PHP_EOL;

$prenom = readline('Veuillez saisir votre prenom : ');
$nom = readline('Veuillez saisir votre nom de famille : ');

echo getUserName($prenom, $nom) . PHP_EOL;
echo getFullName($prenom, $nom) . PHP_EOL;
echo askUser($prenom, $nom) . PHP_EOL;


