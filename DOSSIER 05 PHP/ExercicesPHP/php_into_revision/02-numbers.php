<?php

function getSum(float $_nombre1, float $_nombre2) : string
{
    $sum = $_nombre1 + $_nombre2;
    $result = 'La somme de ' . $_nombre1 . ' et ' . $_nombre2 . ' est : ' . $sum . PHP_EOL;
    return $result;
}

function getSub(float $_nombre1, float $_nombre2) : string
{
    $sub = $_nombre1 - $_nombre2;
    $result = 'La soustraction de ' . $_nombre1 . ' par ' . $_nombre2 . ' donne : ' . $sub . PHP_EOL;
    return $result;
}

function getMulti(float $_nombre1, float $_nombre2) : string
{
    $multi = $_nombre1 * $_nombre2;
    $multi = number_format($multi, 2, ',', ' ');
    $result = 'La multiplication de ' . $_nombre1 . ' par ' . $_nombre2 . ' donne ' . $multi . PHP_EOL;
    return $result;
}

function getDiv(float $_nombre1, float $_nombre2) : string
{
    if ($_nombre2 === 0)
    {
        $result = 'Le diviseur ne peut être égal à zéro';
    }
    else
    {
        $div = $_nombre1 / $_nombre2;
        $div = floatval(number_format($div, 2, ',', ' '));
        $result = 'La division de ' . $_nombre1 . ' par ' . $_nombre2 . ' donne : ' . $div . PHP_EOL;
    }
    return $result;
}


echo getSum(5, 3);

echo getSub(5, 3);
echo getSub(3 ,5);

echo getMulti(32,32);
echo getMulti(5.6, 3);
echo getMulti(5.6, -3.7777);

echo getDiv(20,3);
echo getDiv(20,0);
