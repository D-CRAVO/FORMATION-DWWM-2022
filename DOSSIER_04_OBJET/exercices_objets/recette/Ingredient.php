<?php

/**
 * La classe ingrédient représente un ingrédient d'une recette
 * 
 */
class Ingredient
{
    /** @var string $nom Le nom de l'ingrédient */
    private string $nom;

    /** @var float $quantite La quantite de l'ingrédient de la recette */
    private float $quantite;

    /** @var string $uniteDeMesure l'unité de mesure utilisée pour la quantité */
    private string $uniteDeMesure;

    
    public function __construct(string $nom, float $quantite, string $uniteDeMesure){
        
    }



    /**
     * Retourne le nom de l'ingrédient à l'utilisateur
     *
     * @return string Le nom actuel de l'ingrédient
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Permet la modification du nom par l'utilisateur
     *
     * @param $nouveauNom Le nouveau nom de l'ingrédient
     * @return void
     */
    public function setNom(string $nouveauNom) : void
    {
        $this->nom = $nouveauNom;
    }

    /**
     * Retourne la quantité de l'ingredient à l'utilisateur
     *
     * @return float La valeur actuelle de la quantité
     */
    public function getQuantite() : float
    {
        return $this->quantite;
    }

    /**
     * Permet la modification de la quantite par l'utilisateur
     *
     * @param float $nouvelleQuantite La nouvelle quantité de l'ingrédient
     * @return void
     */
    public function setQuantite(float $nouvelleQuantite) : void
    {
        $this->quantite = $nouvelleQuantite;
    }

    /**
     * Retourne l'unité de mesure de l'ingrédient à l'utilisateur
     *
     * @return void
     */
    public function getUniteDeMesure()
    {
        return $this->uniteDeMesure;
    }

    /**
     * Permet la modification de l'unité de mesure par l'utilisateur
     *
     * @param string $nouvelleUniteDeMesure Nouvelle unité de mesure
     * @return void
     */
    public function setUniteDeMesure(string $nouvelleUniteDeMesure) : void
    {
        $this->uniteDeMesure = $nouvelleUniteDeMesure;
    }

    
    public function __toString() : string
    {
        $result = 'L\'ingrédient a pour nom : ' . $this->nom . PHP_EOL . 'La quantité nécessaire est de ' . $this->quantite. ' ' . $this->uniteDeMesure; 
        return $result;
    }
}
