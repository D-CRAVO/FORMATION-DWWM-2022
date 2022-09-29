<?php

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];
//$names = [''];
//$names = [];
//$date = new DateTime(); $names = [$date];

/**
 * Retourne le premier élément du tableau.
 * Si le tableau est vide, la foonction retourne null.
 *
 * @param array $names
 * @return void
 */
function firstItem(array $array)
{
    if (count($array) === 0)
    {
        return null;
    }
    else
    {
        return $array[0];
    }
}

/**
 * Retourne le dernier élément du tableau.
 * Si le tableau est vide, la fonction retourne null.
 *
 * @param array $names
 * @return void
 */
function lastItem(array $array)
{
    if (count($array) === 0)
    {
        return null;
    }
    else
    {
        $lenNames = count($array);
        return $array[$lenNames - 1];
    }
}


/**
 * Retourner le tableau trié par ordre décroissant.
 *
 * @param array $array
 * @return void
 */
function sortItems(array $array)
{
    arsort($array);
    return $array;
}

/**
 * Retourne une chaine de caractère contenant tous les éléments du tableau triés en ordre croissant 
 * et séparés par une virgule et un espace. 
 * Si le tableau est vide, il faudra retourner la valeur « Nothing to display ».
 *
 * @param array $array
 * @return string
 */
function stringItems(array $array) : string
{
    $lengthArray = count($array);
    if ($lengthArray === 0)
    {
        return "Nothing to display";
    }
    else
    {
        sort($array);
        $result = $array[0];
        for ($i = 1; $i < $lengthArray; $i++)
        {
            $result .= ', ' . $array[$i];
        }
        return $result;
    }

}

print_r($names); echo PHP_EOL;
print_r(firstItem($names)); echo PHP_EOL;
print_r(lastItem($names)); echo PHP_EOL;
print_r(sortItems($names)); echo PHP_EOL;
echo(stringItems($names)); echo PHP_EOL;
