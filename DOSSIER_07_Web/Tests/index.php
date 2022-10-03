<?php
    $serveurBD = "localhost";
    $nomUtilisateur = "user2204";
    $motDePasse = "azer";
    $baseDeDonnees = "db_2204_users";

    mysql_connect($serveurBD,
                    $nomUtilisateur,
                    $motDePasse);

    $connexionReussie = mysql_select_db($baseDeDonnees);

    mysql_close();
?>