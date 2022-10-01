<?php

require '.\Ingredient.php';

// *** Création de nouveaux ingrédients *** //

try 
{
    $farine = new Ingredient('Farine');
    $sucre = new Ingredient('a');
} 
catch (Exception $e) 
{
    echo $e->getMessage() . PHP_EOL;
}

//print_r($farine);


