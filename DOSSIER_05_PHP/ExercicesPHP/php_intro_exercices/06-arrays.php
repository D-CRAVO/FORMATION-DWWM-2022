<?php

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];




// ********************************************************************
echo 'Exercice 6.A Retourner le premier élément du tableau.' . PHP_EOL;

/**
 * Elle retourne le premier élément du tableau. 
 * Si le tableau est vide, la fonction retourne null.
 *
 * @param array $names
 * @return void
 * @author David CRAVO <contact@davidcravo.fr>
 */
/* function firstItem(array $names)
{
    if ($names[0] === '')
    {
        return null;
    }
    else
    {
        return $names[0];
    }
}
echo firstItem($names); */




// *******************************************************************
echo 'Exercice 6.B Retourner le dernier élément du tableau' . PHP_EOL;

/**
 * Retourne le dernier élément du tableau.
 * Si le tableau est vide, la fonction retourne null.
 *
 * @param array $names
 * @return void
 */
/* function lastItem(array $names)
{
    $lgNames = count($names);
    if ($names === '')
    {
        return null;
    }
    else
    {
        return $names[$lgNames - 1];
    }
}
echo lastItem($names); */

// *********************************************************
echo 'Exercice 6.C Retourner le tableau trié par ordre décroissant' . PHP_EOL;

print_r($names);

function sortItems1(array $names)
{
    if (count($names) === 0)
    {
        echo 'count empty'. PHP_EOL;
        return null;
    }
    else
    {
        echo 'count not empty'. PHP_EOL;
        return arsort($names);
    }
}
sortItems1($names);

print_r($names);

function sortItems2(array $names)
{
    if (empty($names) === 0)
    {
        echo 'empty empty'. PHP_EOL;
        return null;
    }
    else
    {
        echo 'empty not empty'. PHP_EOL;
        return arsort($names);
    }
}
sortItems2($names);

print_r($names);