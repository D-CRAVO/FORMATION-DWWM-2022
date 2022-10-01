<?php

require 'Point.php';

$nom = 'A';
$abscisseXA = 8;
$ordonneeYA = 8;
$pointA = new Point($nom, $abscisseXA, $ordonneeYA);
$pointB = new Point('B', 4, 2);
$pointC = new Point('C', 4, 1);
$pointD = new Point('D');

echo $pointA;
echo $pointB;
echo $pointC;
echo $pointD;
echo ('deplacer(12, 12)      : ' . $pointA->deplacer(12, 12));
echo $pointA;

echo ('symetrieAxeAbscisse() : ' . $pointA->symetrieAxeAbscisse());
echo ('symetrieAxeOrdonnee() : ' . $pointA->symetrieAxeOrdonnee());
echo ('symetrieOrigine()     : ' . $pointB->symetrieOrigine());
echo ('symetrieBissectrice() : ' . $pointC->symetrieBissectrice());