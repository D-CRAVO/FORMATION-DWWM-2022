<?php

require 'Banque.php';

class ReseauBancaire
{

    private string $nom;

    private array $nbBanques;

    private array $mesBanques; 

    public function setNomReseauBancaire(string $nom) : void
    {
        $this->nom = $nom;
    }

    public function getNomReseauBancaire() : string
    {
        return $this->nom;
    }

    public function __construct(string $nom)
    {
        $this->setNomReseauBancaire($nom);
        $this->mesReseauxBancaires = [];
    }

    public function __toString() : string
    {
        //$nbBanques = count($this->mesBanques);
        $result = PHP_EOL . 'Le Réseau bancaire s\'appelle : ' . $this->nom. PHP_EOL;

        // for ($i=0; $i < $nbBanques; $i++) 
        // { 
        //     $result .= PHP_EOL . $this->mesBanques[$i]->__toString() .PHP_EOL;
        // }
        
        return $result;
    }

    public function AjouterBanque(Banque $banque) : void
    {
        array_push($this->mesReseauxBancaires, $banque);
    }

    // public function AffichageMesComptes() : string
    // {
    //     $result = 'Le compte bancaire ' . $this->nom . 'possède les comptes suivant : ';
    //     for ($i=0; $i < count($this->mesReseauxBancaires); $i++) 
    //     { 
    //         $result .= PHP_EOL . $this->mesReseauxBancaires[$i]->__toString() .PHP_EOL;
    //     }
    //     return $result;
    // }
}


