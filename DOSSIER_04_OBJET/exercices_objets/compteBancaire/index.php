<?php
//require 'Banque.php';
require 'ReseauBancaire.php';

$compte01 = new Compte(1, 'David CRAVO', 10000, 500);
$compte02 = new Compte(2, 'David CRAVO', 1000, 250);

// echo '*** avant credit ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// $compte02->crediter(500);

// echo '*** après crédit ***' . PHP_EOL;
// echo $compte02 . PHP_EOL;

// ***********************************************************

// echo '*** avant debit ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
//echo $compte02 . PHP_EOL;

// $compte01->debiter(50);

// echo '*** après débit ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// ************************************************************

// echo '*** avant transfert 1 ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// $compte02->transferer($compte01, 750);

// echo '*** après transfert 1 ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// **************************************************************

// echo '*** avant transfert 2 ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// $compte02->transferer($compte01, -100);

// echo '*** après transfert 2 ***' . PHP_EOL;
// echo $compte01 . PHP_EOL;
// echo $compte02 . PHP_EOL;

// **************************************************************

// $compte01->comparer($compte02);

// **************************************************************

$compte03 = new Compte(3, "Toto MACHIN", 2500, 350);
$compte04 = new Compte(4, "Toto MACHIN", 11500, 500);
$compte05 = new Compte(5, "Titi BIDULE", 500, 0);
$compte06 = new Compte(5, "Titi BIDULE", 500, 0);

$cmBlois = new Banque('Crédit Mutuel', 'Blois');

$cmBlois->ajouterCompte($compte04);
$cmBlois->ajouterCompte($compte05);

$caBlois = new Banque('Crédit Agricole' , 'Blois');

$caBlois->ajouterCompte($compte03);

// echo($cmBlois);
// var_dump($cmBlois);

// echo(PHP_EOL . 'Le compte ayant le solde maximum est : ' . PHP_EOL . $cmBlois->compteSup());

// if (!empty($cmBlois->rendCompte()))
// echo(PHP_EOL . 'Le compte à afficher est : ' . PHP_EOL . $cmBlois->rendCompte(4));
// echo $cmBlois;
// var_dump($cmBlois->mesComptes[1]);

// echo($cmBlois->transferer($caBlois, 3, 1250));
// echo(get_parent_class($this->getNom()));

$caBlois->transfererBanque(3, $cmBlois, 4, -25000);
//var_dump($cmBlois->mesComptes);

$creditMutuel = new ReseauBancaire ('Credit Mutuel Du Centre');

$creditMutuel->ajouterBanque($cmBlois);

echo $creditMutuel;

// var_dump($creditMutuel->cmBlois->mesComptes);
// var_dump($creditMutuel);

//$creditMutuel->AffichageMesComptes();