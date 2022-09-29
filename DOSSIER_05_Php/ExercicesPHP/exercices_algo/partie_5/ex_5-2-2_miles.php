<!-- CONVERSION KILOMETRES MILES -->

<?php
    $valeur = readline("Veuillez entrer votre valeur suivi de son unité (mi ou km) : ");
    $parties = explode(' ',$valeur);// separe la chaine

    //$valeur = floatval($parties[0]); // pour faire la convertion

    $distance = doubleval($parties[0]);
    $unite = trim($parties[1]); // retire les espaces

    if ($unite === 'mi') 
    {
        $result = conversionMiKm($distance);
    }
    else if ($unite === 'km') 
    {
        $result = conversionKmMi ($distance);
    }
    else 
    {
        $result = conversionKmMi ($distance);
    }
    echo $result;

    function conversionMiKm ($distance)
    {
        $Km = doubleval($distance / 1.609);
        return $distance . ' miles donne ' . $Km . ' kilomètres.';
        //return "$distance miles donne $Km kilomètres.";
    }

    function conversionKmMi ($distance)
    {
        $Mi = doubleval($distance * 1.609);
        return $distance . ' kilometres donne ' . $Mi . ' miles.';
        //return "$distance kilometres donne $Mi miles.";
    }