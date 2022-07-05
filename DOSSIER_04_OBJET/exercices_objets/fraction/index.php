<?php

require 'Fraction.php';

// echo ('Fraction(12,7)    : ' . $fraction1 = new Fraction(12,7));
// echo ('Fraction(9,1)     : ' . $fraction2 = new Fraction(9,1));
// echo ('Fraction(0,1)     : ' . $fraction3 = new Fraction(0,1));
// echo ('Fraction(1,0)     : ' . $fraction4 = new Fraction(1,0));
// echo ('Fraction(0,0)     : ' . $fraction5 = new Fraction(0,0));
// echo ('Fraction(4,7)     : ' . $fraction6 = new Fraction(4,7));
// echo ('Fraction(120,40)  : ' . $fraction7 = new Fraction(120,40));
// echo ('Fraction(135,40)  : ' . $fraction8 = new Fraction(135,40));
echo ('Fraction(135,40)  : ' . $fraction9 = new Fraction(135,40));
echo ('Fraction(4,7)     : ' . $fraction10 = new Fraction(4,7));
echo ('Fraction(1105,280): ' . $fraction11 = new Fraction(1105,280));
echo ('Fraction (20,3)   : ' . $fraction12 = new Fraction(20,3));
echo ('Fraction (12,3)   : ' . $fraction13 = new Fraction(12,3));

echo PHP_EOL;

// echo ('Opposé de Fraction(4,7)  : ' . $fraction6->oppose());
// $fraction6->oppose();
// echo PHP_EOL;

// echo ('Inverse de Fraction(4,7) : ' . $fraction6->inverse());
// echo PHP_EOL;

// echo ('Fraction(4,7) superieur à Fraction(0,1) : ' . $fraction6->superieurA($fraction3) . PHP_EOL);
// echo ('Fraction(0,1) superieur à Fraction(4,7) : ' . $fraction3->superieurA($fraction6) . PHP_EOL);
// echo ('Fraction(0,1) superieur à Fraction(1,0) : ' . $fraction3->superieurA($fraction4) . PHP_EOL);
// echo PHP_EOL;

// echo ('Fraction(0,1) égal à Fraction(1,0) : ' . $fraction3->egalA($fraction4) . PHP_EOL);
// echo ('Fraction(0,1) égal à Fraction(0,1) : ' . $fraction3->egalA($fraction3) . PHP_EOL);
// echo ('Fraction(4,7) égal à Fraction(0,1) : ' . $fraction6->egalA($fraction3) . PHP_EOL);
// echo PHP_EOL;

// echo ('Pgcd 120 et 40 : ' . $fraction7->getPgcd(). PHP_EOL);
// echo ('Réduction de Fraction(120,40) : ') . $fraction7->reduire() . PHP_EOL;
// echo ('Réduction de Fraction(135,40) : ') . $fraction8->reduire() . PHP_EOL;
// echo ('Réduction de Fraction(1105,280) : ') . $fraction11->reduire() . PHP_EOL;
// echo PHP_EOL;

echo ('Fraction(135,40) plus Fraction(4, 7) : ' . $fraction9->plus($fraction10));
echo ('Fraction(20,3) moins Fraction(12,3) : ' . $fraction12->moins($fraction13));