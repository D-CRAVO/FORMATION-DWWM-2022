<?php

function helloWorld()
{
    echo "Hello World !". PHP_EOL;
}

helloWorld();

function hello(string $name) : string
{
    return "Hello $name !" . PHP_EOL;
}

echo hello("Mike");

function helloNobody(string $name) : string
{
    if ($name === '')
    {
        return 'Nobody'. PHP_EOL;
    }
    else
    {
        return "Hello $name !" . PHP_EOL;
    }
}

$name = readline('Veuillez entrer votre prénom : ');
echo helloNobody($name);