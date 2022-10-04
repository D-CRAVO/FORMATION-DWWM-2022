
<?php

    require 'Compte.php';

    $compte01 = new Compte(1, 'David CRAVO', 10000, 500);
    $compte02 = new Compte(2, 'Sandrine CRAVO', 3000, 250);
    echo $compte01;

    $compte01->crediter(500);
    echo $compte01;

    $compte01->debiter(-1000);
    echo $compte01;

    $compte01->transferer($compte02, -250);
    echo $compte01;
    echo $compte02;
    echo PHP_EOL;

    echo '*** Comparaison de comptes ***' . PHP_EOL;
    echo $compte01->traduire($compte01->comparer($compte02)) . PHP_EOL;
    echo $compte01;
    echo $compte02;

  