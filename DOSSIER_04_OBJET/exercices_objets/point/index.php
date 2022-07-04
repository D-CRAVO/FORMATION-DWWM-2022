<?php

require 'Point.php';

$nom = 'A';
$abscisseXA = 8;
$ordonneeYA = 8;
$pointA = new Point($nom, $abscisseXA, $ordonneeYA);
$pointB = new Point('B', 4, 4);
$pointC = new Point('C');

echo $pointA;
echo $pointB;
echo $pointC;
echo ($pointA->deplacer(12, 12));
echo $pointA;