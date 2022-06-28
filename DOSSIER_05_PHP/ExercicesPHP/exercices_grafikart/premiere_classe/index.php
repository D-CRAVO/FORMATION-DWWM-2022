<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
//$merlin->nom = "Merlin";
$merlin->regenerer();

$harry = new Personnage("Harry");
//$harry->nom = "Harry";
$harry->mort();


var_dump($merlin);
var_dump($harry);