<?php

require 'Fraction.php';

echo ('Fraction(12,7) : ' . $fraction1 = new Fraction(12,7));
echo ('Fraction(9,1)  : ' . $fraction2 = new Fraction(9,1));
echo ('Fraction(0,1)  : ' . $fraction3 = new Fraction(0,1));
echo ('Fraction(1,0)  : ' . $fraction4 = new Fraction(1,0));
echo ('Fraction(0,0)  : ' . $fraction5 = new Fraction(0,0));
echo ('Fraction(4,7)  : ' . $fraction6 = new Fraction(4,7));

echo ('Opposé de Fraction(4,7)  : ' . $fraction6->oppose());
$fraction6->oppose();
echo ('Inverse de Fraction(4,7) : ' . $fraction6->inverse());