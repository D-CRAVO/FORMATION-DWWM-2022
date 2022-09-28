<?php

$namesNull = [];
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];
$nbNames = count($names);

function firstItem(array $_names) : string
{
    if (count($_names) === 0)
    {
        $result = 'null';
    }
    else
    {
        $result = $_names[0];
    }
    return $result;
}

function lastItem(array $_names) : string
{
    $nb_
}

echo firstItem($names) . PHP_EOL;
echo firstItem($namesNull) . PHP_EOL;
