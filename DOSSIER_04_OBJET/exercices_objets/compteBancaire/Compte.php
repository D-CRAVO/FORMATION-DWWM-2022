<?php


/**
 * La classe représente un compte bancaire
 */
class Compte extends Banque
{

    /**
     * Numéro du compte bancaire
     *
     * @var integer
     */
    private int $numero;

    /**
     * Nom du propriétaire du compte bancaire
     *
     * @var string
     */
    private string $nom;

    /**
     * Solde : ontant restant sur le compte bancaire
     *
     * @var float
     */
    private float $solde;

    /**
     * Montant du découvert autorisé
     * Le solde ne peut descendre en dessous
     *
     * @var integer
     */
    private int $decouvert; 

    /**
     * Constructeur
     *
     * @param integer $numero
     * @param string $nom
     * @param float $solde
     * @param integer $decouvert
     */
    public function __construct(int $numero, string $nom, float $solde = 0, int $decouvert = 0)
    {
        $this->setNumero($numero);
        $this->setNom($nom);
        $this->setSolde($solde);
        $this->setDecouvert($decouvert);
    }

    /**
     * Retourne le numéro du compte bancaire
     *
     * @return integer
     */
    public function getNumero() : int
    {
        return $this->numero;
    }

    /**
     * Permet la création du numéro de compte
     *
     * @param integer $numero
     * @return void
     */
    private function setNumero(int $numero) : void
    {
        $this->numero = $numero;
        /* if (!file_exists($numero))
        {
            $this->numero = $numero;
        }
        else
        {
            echo 'Le compte existe déjà.';
        } */
    }

    /**
     * Retourne le nom du propriétaire du compte bancaire
     *
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Permet l'assignation d'un nom à un compte bancaire
     *
     * @param string $nom
     * @return void
     */
    private function setNom(string $nom) : void
    {
        $this->nom = $nom;
    }

    /**
     * Retourne le solde du compte bancaire
     *
     * @return float
     */
    public function getSolde() : float
    {
        return $this->solde;
    }

    /**
     * Permet la modification du solde du compte bancaire
     *
     * @param float $solde
     * @return void
     */
    public function setSolde(float $solde) : void
    {
        $this->solde = $solde;
    }

    /**
     *  Retourne le découvert du compte bancaire
     *
     * @return integer
     */
    public function getDecouvert() : int
    {
        return $this->decouvert;
    }

    /**
     * Permet la modification du découvert du compte bancaire
     *
     * @param integer $decouvert
     * @return void
     */
    public function setDecouvert(int $decouvert) : void
    {
        $this->decouvert = $decouvert;
    }

    /**
     * Créditer le solde du compte sélectionné du montant indiqué
     *
     * @param float $montant //Montant à créditer
     * @return void
     */
    public function crediter(float $montant) : void
    {
        $this->solde += $montant;
    }

    /**
     * Débiter le solde du compte sélectionné du montant indiqué
     *
     * @param float $montant //Montant à débiter
     * @return bool
     */
    public function debiter(float $montant) : bool
    {
        $result = false;
        $condition = ($this->solde + $this->decouvert >= $montant);
        if ($condition)
        {
            $this->solde -= $montant;
            $result = true;
        }
        else 
        {
            echo 'Opération de débit non réalisée.' . PHP_EOL;
            echo PHP_EOL;
            $result = false;
        }
        return $result;
        
    }

    /**
     * Transfert du montant sélectionné du compte sélectionné vers le compte $compte
     *
     * @param compte $compte    //Compte vers lequel le transfert s'effectue
     * @param float $montant    //Montant du transfert
     * @return boolean
     */
    public function transferer(compte $compte, float $montant) : bool
    {
        $result = false;
        $condition = ($this->solde + $this->decouvert >= $montant);
        if ($condition)
        {
            $this->debiter($montant);
            $compte->crediter($montant);
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

    public function transfererNo(int $numeroEmmetteur, int $numeroRecepteur, float $montant)
    {
        echo ($emmeteur = $this->mesComptes->getNom() == $numeroEmmetteur);
    }

    public function comparer(Compte $compte) : bool
    {
        $result = false;
        $condition = ($this->solde > $compte->solde);
        if ($condition)
        {
            $resultAffichage = ' Le solde du compte ' . $this->numero . ' de ' . $this->nom 
                . ' est supérieur au solde du compte ' . $compte->numero . ' de ' . $compte->nom . '.' 
                . PHP_EOL;
            $result = true;
        }
        else
        {
            $resultAffichage = ' Le solde du compte ' . $this->numero . ' de ' . $this->nom 
                . ' est inférieur au solde du compte ' . $compte->numero . ' de ' . $compte->nom . '.' 
                . PHP_EOL;
            $result = false;
        }
        echo $resultAffichage;
        return $result;
    }

    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        $result = 'Le compte numéro ' . $this->numero . PHP_EOL 
            . ' dont le propriétaire est ' . $this->nom . PHP_EOL
            . ' a pour solde : '. $this->solde . ' euros' . PHP_EOL
            . ' et pour découvert autorisé : '  . $this->decouvert . ' euros' . PHP_EOL;
        return $result;
    }

}
