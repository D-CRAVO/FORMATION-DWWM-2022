<?php

/* $string =  'essai';
echo '<p>'. $string . '<p>'; */

//$message = 'Aucun résultat';
$list = 'Liste des personnes';
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function htmlList(string $list, array $names)
{
    echo '<h3>' . $list . '<h3>' . PHP_EOL;
    
    if (count($names) === 0)
    {
        echo '<p>' . 'Aucun résultat' . '<p>' . PHP_EOL;
    }
    else
    {
        echo '<ul>' . PHP_EOL;
        for ($i = 0; $i < count($names); $i++)
        {
            echo '<li>' . $names[$i] . '</li>' . PHP_EOL;
        }
        echo '</ul>' . PHP_EOL;
    }
}

echo htmlList($list, $names);
