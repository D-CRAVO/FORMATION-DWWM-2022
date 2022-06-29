<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$merlin->regenerer();
$harry = new Personnage("Harry");

$merlin->attaque($harry);



if($harry->mort()){
    echo 'Harry est mort' . PHP_EOL;
}else{
    echo 'Harry a survécu' . PHP_EOL;
}
var_dump($merlin);
var_dump($harry);