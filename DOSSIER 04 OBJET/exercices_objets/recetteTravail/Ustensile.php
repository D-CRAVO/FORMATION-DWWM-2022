<?php

class Ustensile
{

    private string $nom;

    private string $mesUstensiles; 

    public function __construct(string $sonNom) // sonNom paramètre (argument) de la classe
    {
        // initialiser TOUS les attributs (variables) de la classe
        $this->nom = $sonNom;
    }

    public function getNomUstensile(): string
    {
        return $this->nom;
    }


    
}