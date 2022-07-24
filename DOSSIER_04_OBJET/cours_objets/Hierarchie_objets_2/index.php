<?php

require './Animal.php';
require './Herbivore.php';
require './Cheval.php';
require './Girafe.php';
require './Chien.php';

/** Création de nouveaux animaux */

$carnivore = new Animal('Carnivore');

/** Création de nouveaux chevaux */

$cheval = new Cheval('Cheval');

/** Création de nouvelles girafes */

$girafe = new Girafe('Girafe');

/** Création de nouveaux chiens */

$chien = new Chien('Carnivore', 'Chien');

/** Afichage */

echo $carnivore->seDeplacer() . PHP_EOL; 
echo $carnivore->manger() . PHP_EOL; 
echo $carnivore->crier() . PHP_EOL; 

echo $cheval->seDeplacer() . PHP_EOL;
echo $cheval->manger() . PHP_EOL;
echo $cheval->crier() . PHP_EOL;

echo $girafe->seDeplacer() . PHP_EOL;
echo $girafe->manger() . PHP_EOL;
echo $girafe->crier() . PHP_EOL;

echo $chien->seDeplacer() . PHP_EOL;
echo $chien->manger() . PHP_EOL;
echo $chien->crier() . PHP_EOL;
