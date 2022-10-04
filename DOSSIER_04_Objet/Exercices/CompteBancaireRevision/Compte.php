<?php

class Compte
{
    private int $numeroCompte;
    private string $nomCompte;
    private float $soldeCompte;
    private int $decouvertCompte;

    public function getNumeroCompte() : int
    {
        return $this->numeroCompte;
    }

    private function setNumeroCompte(int $_numeroCompte) : void
    {
        $this->numeroCompte = $_numeroCompte;
    }

    public function getNomCompte() : int
    {
        return $this->nomCompte;
    }

    private function setNomCompte(string $_nomCompte) : void
    {
        $this->nomCompte = $_nomCompte;
    }

    public function getSoldeCompte() : float
    {
        return $this->soldeCompte;
    }

    private function setSoldeCompte(float $_soldeCompte) : void
    {
        $this->soldeCompte = $_soldeCompte;
    }

    public function getDecouvertCompte() : int
    {
        return $this->decouvertCompte;
    }

    private function setDecouvertCompte(int $_decouvertCompte) : void
    {
        $this->decouvertCompte = $_decouvertCompte;
    }

    public function __construct(int $_numeroCompte, string $_nomCompte, float $_soldeCompte = 0, int $_decouvertCompte = 0)
    {
        $this->setNumeroCompte($_numeroCompte);
        $this->setNomCompte($_nomCompte);
        $this->setSoldeCompte($_soldeCompte);
        $this->setDecouvertCompte($_decouvertCompte);
    }

    public function __toString() : string
    {
        $result = 'Le compte numéro ' . $this->numeroCompte . PHP_EOL
            . ' dont le propriétaire est ' . $this->nomCompte . PHP_EOL
            . ' a pour solde : ' . $this->soldeCompte . PHP_EOL
            . ' et pour solde autorisé ' . $this->decouvertCompte . ' euros' . PHP_EOL;
        return $result;
    }

    public function crediter(float $_montant) : void
    {
        $this->soldeCompte += $_montant; 
    }

    public function debiter(float $_montant) : void
    {
        $this->soldeCompte -= $_montant;
    }

    public function transferer(Compte $_compte, float $_montant) : void
    {
        $this->debiter($_montant);
        $_compte->crediter($_montant);
    }
}

