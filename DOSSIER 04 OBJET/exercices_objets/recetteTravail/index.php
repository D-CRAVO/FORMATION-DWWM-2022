<?php 

require './Ingredient.php';

// *** Création de nouveaux ingrédients *** //

try 
{
    $farine = new Ingredient('Farine');
    $sucre = new Ingredient('a');
} 
catch (Exception $e) 
{
    echo $e->getMessage() . PHP_EOL;
}
// $sucre = new Ingredient('Sucre', 210, 'grammes');
// $farine = new Ingredient('Farine', 200, 'grammes');
// $beurre = new Ingredient('Beurre', 200, 'grammes');
// $oeufs = new Ingredient('Oeufs', 4);
// $levure = new Ingredient('Levure chimique', 1, 'cuillère');
// $caramel = new Ingredient('Caramel', 0, '');
// $nonConnu = new Ingredient('ghgh', 0,'');
// $farine = new Ingredient('Farine');

// echo $sucre . PHP_EOL;
// echo $farine . PHP_EOL;
// echo $beurre . PHP_EOL;
// echo $oeufs . PHP_EOL;
// echo $levure . PHP_EOL;
// echo $caramel . PHP_EOL;
// echo $nonConnu . PHP_EOL;




echo $farine->getNom() . PHP_EOL;
$farine->setNom('Farine T55');
echo $farine->getNom() . PHP_EOL;

$cuillere = new Ustensile('Cuillère');
$fouet = new Ustensile('Fouet');

$farine->addNewUstensile($cuillere);
$farine->addNewUstensile($fouet);

// print_r($farine);

echo $farine->displayUstensiles();
$farine->deleteUstensile(0, 1);
echo $farine->displayUstensiles();
$farine->deleteAllUstensile(0);


var_dump($farine);

// Dans un saladier, mettez les 2 œufs et le sucre puis fouettez bien. Ajoutez-y ensuite la farine et la cuillère à café de levure chimique. Mélangez bien le tout avec une cuillère. 
// Faites fondre à moitié ensuite le beurre dans un autre récipient (1 min 20 seulement au micro-ondes). Ajoutez le beurre fondu au 1er mélange et mélangez bien. Ajoutez ensuite un zeste de citron ou de vanille. 
// Versez le contenu dans un moule à cake ou dans des moules individuels pour faire des mini cakes. Vous pouvez doubler les quantités si vous souhaitez faire un plus gros quatre quart. Enfournez à 180°. 
