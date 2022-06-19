<!-- CALCUL DE LA SURFACE D'UN SECTEUR CIRCULAIRE -->

<?php
    $rayon = readline('Veuillez saisir le rayon du secteur circulaire : ');
    $angle = readline('Veuillez saisir l\'angle du secteur circulaire : ');
    $aire = pi() * pow($rayon, 2) * $angle / 360;
    echo "L\'aire du secteur circulaire est de $aire m2";
?>