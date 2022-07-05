<?php

require 'Banque.php';

/* $compte01 = new Compte(1, 'David CRAVO', 10000, 500);
$compte02 = new Compte(2, 'David CRAVO', 1000, 250);

echo '*** avant credit ***' . PHP_EOL;
echo $compte01 . PHP_EOL;
echo $compte02 . PHP_EOL;

$compte02->crediter(500);

echo '*** après crédit ***' . PHP_EOL;
echo $compte02 . PHP_EOL;

$compte01->debiter(11000);

echo '*** après débit ***' . PHP_EOL;
echo $compte01 . PHP_EOL;

echo '*** avant transfert 1 ***' . PHP_EOL;
echo $compte01 . PHP_EOL;
echo $compte02 . PHP_EOL;

$compte02->transferer($compte01, 1750);

echo '*** après transfert 1 ***' . PHP_EOL;
echo $compte01 . PHP_EOL;
echo $compte02 . PHP_EOL;

echo '*** avant transfert 2 ***' . PHP_EOL;
echo $compte01 . PHP_EOL;
echo $compte02 . PHP_EOL;

$compte02->transferer($compte01, 1050);

echo '*** après transfert 2 ***' . PHP_EOL;
echo $compte01 . PHP_EOL;
echo $compte02 . PHP_EOL;

$compte01->comparer($compte02); */

$compte03 = new Compte(3, "Toto MACHIN", 2500, 350);
$compte04 = new Compte(4, "Toto MACHIN", 11500, 500);
$compte05 = new Compte(5, "Titi BIDULE", 500, 0);

$cmBlois = new Banque('Crédit Mutuel', 'Blois');
//$cmBlois->premierCompte($compte03);
$cmBlois->ajouterCompte($compte04);
$cmBlois->ajouterCompte($compte05);

//echo($cmBlois);
//var_dump($cmBlois);

echo(PHP_EOL . 'Le compte ayant le solde maximum est : ' . PHP_EOL . $cmBlois->compteSup());

//if (!empty($cmBlois->rendCompte()))
echo(PHP_EOL . 'Le compte à afficher est : ' . PHP_EOL . $cmBlois->rendCompte());

//var_dump($cmBlois->mesComptes[1]);
