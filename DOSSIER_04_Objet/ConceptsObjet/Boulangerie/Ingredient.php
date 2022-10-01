<?php

class Ingredient{

    private $nom;
    private $quantite;
    private $uniteDeMesure;

    public function __construct($nom, $quantite, $uniteDeMesure)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->uniteDeMesure = $uniteDeMesure;
    }
}