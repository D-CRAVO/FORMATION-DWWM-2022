<?php

/**
 *  Afficher et retourne la date du jour au format d/m/Y sous forme de chaine de caractères
 *
 * @return string
 */
function getToday() : string
{
    $date = new DateTime();
    echo $date->format('Y-m-d H:i:s') . PHP_EOL;
    return $date->format('d-m-Y');
}

function getTimeLeft(string $date) : string
{
    $date = new DateTime();
    //$date->format('Y-m-d');

    $today = new DateTime();
    //$toDay->format('Y-m-d');

    $today->setTime(0,0,0);
    if ($date === $today)
    {
        return "aujourd'hui";
    }
    else
    {
        return "essai";
    }
        

}

echo PHP_EOL;
echo getToday() . PHP_EOL;
echo PHP_EOL;
echo getTimeLeft('2022-09-29');