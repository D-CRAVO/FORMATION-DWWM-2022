<?php

require 'Banque.php';

class ReseauBancaire
{

    private string $nom;

    private array $nbReseauxBancaires;

    private array $mesReseauxBancaires; 

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
        $nbReseauxBancaires = count($this->mesReseauxBancaires);

        $resultReseauBancaire = PHP_EOL . 'Le Réseau bancaire ' . $this->nom. ' est composée de : ';
        $resultMesReseauxBancaires = '';

        for ($i=0; $i < $nbReseauxBancaires; $i++) 
        { 
            $resultMesReseauxBancaires .= PHP_EOL . $this->mesReseauxBancaires[$i]->__toString();
        }
        
        return $resultReseauBancaire . $resultMesReseauxBancaires;
    }

    public function AjouterBanque(Banque $banque) : void
    {
        array_push($this->mesReseauxBancaires, $banque);
    }

    public function AffichageMesComptes(string $banqueNom, string $banqueVille) : string
    {
        $result = 'La banque ' . $this->nom . 'possède les comptes suivant : ';
        for ($i=0; $i < count($this->mesReseauxBancaires); $i++) 
        { 
            $result .= PHP_EOL . $this->mesReseauxBancaires[$i]->__toString() .PHP_EOL;
        }
        return $result;
    }
}


