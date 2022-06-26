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
 * @author David CRAVO <contact@davidcravo.fr>
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

/**
 * Retourner le tableau trié par ordre décroissant.
 *
 * @param array $names
 * @return void
 * @author David CRAVO <contact@davidcravo.fr>
 */
/* function sortItems1(array $names)
{
    if (count($names) === 0)
    {
        return null;
    }
    else
    {

        arsort($names);
        return ($names);
    }
}
print_r(sortItems1($names)); */

/**
 * Retourner le tableau trié par ordre décroissant.
 *
 * @param array $names
 * @return void
 * @author David CRAVO <contact@davidcravo.fr>
 */
/* function sortItems2(array $names)
{
    if (empty($names))
    {
        return null;
    }
    else
    {
        arsort($names);
        return $names;
    }
}
print_r(sortItems2($names)); */




// *********************************************************************************************************
echo 'Exercice 6.D retourne une chaine de caractère contenant tous les éléments du tableau triés' . PHP_EOL;
// Créer une fonction « stringItems() » acceptant un argument de type array. 
// Cette fonction retourne une chaine de caractère contenant tous les éléments du tableau triés en ordre croissant et séparés par 
// une virgule et un espace. Si le tableau est vide, il faudra retourner la valeur « Nothing to display ».

function stringItems(array $names) : string
{
   if (empty($names)) 
   {
        return 'Nothing to display';
   }
   else 
   {
        asort($names);
        print_r($names);
        $result = $names[0];
        for ($i = 1; $i < count($names); $i++)
        {
            $result = $result . ' , ' . $names[$i];
        }
        return $result;
   }
}
echo (stringItems($names));