<?php

/* 
$maVariable = "valeur";
$maVariable = 1;
$maVariable = new DateTime(); 
*/

function direBonjour() : void // procédure
{
    echo "<h1>Bonjour</h1>";
}

function direBonjourAQui(string $nom) : string
{
    return '<p>Bonjour ' . $nom . '</p>';
}

direBonjour();
echo direBonjourAQui('Calixte');

$bonjour = direBonjourAQui('Océane');
echo $bonjour;

$nom = "David";

// echo "<p>Bonjour $nom</p>";
echo '<p>Bonjour ' . $nom . '</p>';

require 'footer.php';