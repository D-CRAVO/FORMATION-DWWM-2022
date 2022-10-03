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

    private function setNomCompte(int $_nomCompte) : void
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
}
