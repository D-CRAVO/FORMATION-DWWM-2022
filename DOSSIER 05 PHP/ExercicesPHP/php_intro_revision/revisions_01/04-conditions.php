<?php

/**
 * Détermine si la personne est majeure
 *
 * @param integer $_age // Âge de la personne
 * @return boolean
 */
function isMajor(int $_age) : bool
{
    $majorAge = 18;
    if ($_age > $majorAge)
    {
        $result = true;
    }
    else if ($_age < $majorAge)
    {
        $result = false;
    }
    else
    {
        $result = true;
    }
    return $result;
}

function getRetired(int $_age) : string
{
    $ageRetired = 60;
    if ($_age > $ageRetired)
    {
        $years = $_age - $ageRetired;
        $result = 'Vous êtes à la retraite depuis ' . $years . ' ans.';
    }
    else if ($_age === $ageRetired)
    {
        $result = 'Vous êtes à la retraite cette année.';
    }
    else if ($_age > 0)
    {
        $years = $ageRetired - $_age;
        $result = 'Il vous reste ' . $years . ' avant la retraite.';
    }
    else
    {
        $result = 'Vous n\'êtes pas encore né.';
    }
    return $result;
}

function getMax(float $_nb1, float $_nb2, float $_nb3) : string
{
    if (($_nb1 === $_nb2) || ($_nb1 === $_nb3) || ($_nb2 === $_nb3))
    {
        $result = 0;
    }
    else if ($_nb1 > $_nb2)
    {
        if ($_nb2 > $_nb3)
        {
            $result = $_nb1 . ' > ' . $_nb2 . ' > ' . $_nb3;
        }
        else if ($_nb1 > $_nb3)
        {
            $result = $_nb1 . ' > ' . $_nb3 . ' > ' . $_nb2;
        }
        else
        {
            $result = $_nb3 . ' > ' . $_nb1 . ' > ' . $_nb2;
        }
    }
    else
    {
        if ($_nb1 > $_nb3) // $_nb2 > $_nb1
        {
            $result = $_nb2 . ' > ' . $_nb1 . ' > ' . $_nb3;
        }
        else if ($_nb3 > $_nb2)
        {
            $result = $_nb3 . ' > ' . $_nb2 . ' > ' . $_nb1;
        }
        else // $_nb2 > $_nb3 et $_nb3 > $_nb1
        {
            $result = $_nb2 . ' > ' . $_nb3 . ' > ' . $_nb1;
        }
    }
    return $result;
}

function capitalCity($_country) : string
{
    switch ($_country)
    {
        case 'France' : 
            $result = 'Paris';
            break;
        case 'Allemagne' :
            $result = 'Berlin';
            break;
        case 'Italie' :
            $result = 'Rome';
            break;
        case 'Maroc' : 
            $result = 'Rabat';
            break;
        default :
            $result = 'Capitale inconnue';
            break;
    }
    return $result;
}

echo isMajor(12) . PHP_EOL;
echo isMajor(18) . PHP_EOL;
echo isMajor(42) . PHP_EOL;

echo getRetired(12) . PHP_EOL;
echo getRetired(60) . PHP_EOL;
echo getRetired(72) . PHP_EOL;
echo getRetired(-2) . PHP_EOL;

echo getMax(1,2,3) . PHP_EOL;
echo getMax(1,3,2) . PHP_EOL;
echo getMax(3,1,2) . PHP_EOL;
echo getMax(2,1,3) . PHP_EOL;
echo getMax(2,3,1) . PHP_EOL;
echo getMax(3,2,1) . PHP_EOL;
echo getMax(1,1,3) . PHP_EOL;
echo getMax(1,3,3) . PHP_EOL;
echo getMax(1,2,1) . PHP_EOL;

echo capitalCity('France') . PHP_EOL;
echo capitalCity('Allemagne') . PHP_EOL;
echo capitalCity('Italie') . PHP_EOL;
echo capitalCity('Maroc') . PHP_EOL;
echo capitalCity('Espagne') . PHP_EOL;
