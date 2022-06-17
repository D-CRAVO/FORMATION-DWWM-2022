<?php
    $rayon = (float)readline('Veuillez saisir le rayon de la sphère : ');
    $aire = 4 * pi() * pow($rayon, 2);
    $volume = 4/3 * pi() * pow($rayon, 3);
    echo "L'aire de la shère est de $aire m2.\n";
    echo "Le volume de la sphère est de $volume m3.";
?>