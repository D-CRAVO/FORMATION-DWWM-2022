<?php


/**
 * La classe représente un compte bancaire
 */
class Compte
{




    /**
     * Numéro du compte bancaire
     *
     * @var integer
     */
    private int $numeroCompte;

    /**
     * Nom du propriétaire du compte bancaire
     *
     * @var string
     */
    private string $nomCompte;

    /**
     * Solde : Montant restant sur le compte bancaire
     *
     * @var float
     */
    private float $soldeCompte;

    /**
     * Montant du découvert autorisé
     * Le solde ne peut descendre en dessous
     *
     * @var integer
     */
    private int $decouvertCompte; 

    private array $listeComptes;




    /**
     * Retourne le numéro du compte bancaire
     *
     * @return integer
     */
    public function getNumeroCompte() : int
    {
        return $this->numeroCompte;
    }

    /**
     * Permet la création du numéro de compte
     *
     * @param integer $numero
     * @return string
     */
    private function setNumeroCompte(int $_numeroCompte) : void
    {
        $this->numeroCompte = $_numeroCompte;
    }

    /**
     * Retourne le nom du propriétaire du compte bancaire
     *
     * @return string
     */
    public function getNomCompte() : string
    {
        return $this->nomCompte;
    }

    /**
     * Permet l'assignation d'un nom à un compte bancaire
     *
     * @param string $_nomCompte
     * @return void
     */
    private function setNomCompte(string $_nomCompte) : void
    {
        $this->nomCompte = $_nomCompte;
    }

    /**
     * Retourne le solde du compte bancaire
     *
     * @return float
     */
    public function getSoldeCompte() : float
    {
        return $this->soldeCompte;
    }

    /**
     * Permet la modification du solde du compte bancaire
     *
     * @param float $_soldeCompte
     * @return void
     */
    public function setSoldeCompte(float $_soldeCompte) : void
    {
        $this->soldeCompte = $_soldeCompte;
    }

    /**
     *  Retourne le découvert du compte bancaire
     *
     * @return integer
     */
    public function getDecouvertCompte() : int
    {
        return $this->decouvertCompte;
    }

    /**
     * Permet la modification du découvert du compte bancaire
     *
     * @param integer $_decouvertCompte
     * @return void
     */
    public function setDecouvertCompte(int $_decouvertCompte) : void
    {
        $this->decouvertCompte = $_decouvertCompte;
    }

    

    /**
     * Constructeur
     *
     * @param integer $_numeroCompte
     * @param string $_nomCompte
     * @param float $_soldeCompte       // S'il n'est pas renseigné, il est initialisé à 0
     * @param integer $_decouvertCompte // S'il n'est pas renseigné, il est initialisé à 0
     */
    public function __construct(int $_numeroCompte, string $_nomCompte, float $_soldeCompte = 0, int $_decouvertCompte = 0)
    {
        $this->setNumeroCompte($_numeroCompte);
        $this->setNomCompte($_nomCompte);
        $this->setSoldeCompte($_soldeCompte);
        $this->setDecouvertCompte($_decouvertCompte);
    }

    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        $result = 'Le compte numéro ' . $this->numeroCompte . PHP_EOL 
            . ' dont le propriétaire est ' . $this->nomCompte . PHP_EOL
            . ' a pour solde : '. $this->soldeCompte . ' euros' . PHP_EOL
            . ' et pour découvert autorisé : '  . $this->decouvertCompte . ' euros' . PHP_EOL;
        return $result;
    }




    /**
     * Créditer le solde du compte $this sélectionné du montant $_montant indiqué
     *
     * @param float $_montant //Montant à créditer
     * @return void
     */
    public function crediter(float $_montant) : void
    {
        $this->soldeCompte += $_montant;
    }




    /**
     * Débiter le solde du compte sélectionné $this du montant $_montant indiqué
     *
     * @param float $_montant //Montant à débiter
     * @return bool
     */
    public function debiter(float $_montant) : bool
    {
        $result = false;
        $condition = ($this->soldeCompte + $this->decouvertCompte >= $_montant);
        if ($condition)
        {
            $this->soldeCompte -= $_montant;
            $result = true;
        }
        else 
        {
            $result = false;
        }
        return $result;
        
    }




    /**
     * Transfert du montant sélectionné du compte sélectionné vers le compte $compte
     * Après avoir vérifié que le compte est suffisamment approvisionné
     * Et que le montant du transfert n'est pas négatif
     *
     * @param compte $_compte    //Compte vers lequel le transfert s'effectue
     * @param float $_montant    //Montant du transfert
     * @return boolean
     */
    public function transferer(compte $_compte, float $_montant) : bool
    {
        $result = false;
        $condition = ($this->soldeCompte + $this->decouvertCompte >= $_montant && $_montant >=0);
        if ($condition)
        {
            $this->debiter($_montant);
            $_compte->crediter($_montant);
            $result = true;
        }
        else
        {
            echo 'Opération de transfert non réalisée.' . PHP_EOL;
            echo PHP_EOL;
            $result = false;
        }
        return $result;
    }

    /**
     * Compare le solde de deux comptes
     *
     * @param Compte $_compte   // Compte auquel le compte sélectionné est comparé
     * @return boolean
     */
    public function comparer(Compte $_compte) : bool
    {
        $result = false;
        $condition = ($this->soldeCompte > $_compte->soldeCompte);
        if ($condition)
        {
            $resultAffichage = ' Le solde du compte ' . $this->numeroCompte . ' de ' . $this->nomCompte 
                . ' est supérieur au solde du compte ' . $_compte->numeroCompte . ' de ' . $_compte->nomCompte . '.' 
                . PHP_EOL;
            $result = true;
        }
        else
        {
            $resultAffichage = ' Le solde du compte ' . $this->numeroCompte . ' de ' . $this->nomCompte 
                . ' est inférieur au solde du compte ' . $_compte->numeroCompte . ' de ' . $_compte->nomCompte . '.' 
                . PHP_EOL;
            $result = false;
        }
        echo $resultAffichage;
        return $result;
    }

}
