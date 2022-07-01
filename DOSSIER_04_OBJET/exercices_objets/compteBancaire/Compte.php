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
     * @param integer $solde
     * @param integer $decouvert
     */
    public function __construct(int $numero, string $nom, int $solde = 0, int $decouvert = 0)
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
     * @param [type] $numero
     * @return void
     */
    public function setNumero($numero) : void
    {
        $this->numero = $numero;
        /* if (file_exists($numero))
        {
            $this->numero = $numero;
        }
        else
        {
            echo 'Le compte existe déjà.';
            //$result = 'Le compte existe déjà.';
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
     * @param $nom
     * @return void
     */
    public function setNom($nom) : void
    {
        $this->nom = $nom;
    }

    /**
     * Retourne le solde du compte bancaire
     *
     * @return integer
     */
    public function getSolde() : int
    {
        return $this->solde;
    }

    /**
     * Permet la modification du solde du compte bancaire
     *
     * @param integer $nouveauSolde
     * @return void
     */
    public function setSolde(int $nouveauSolde) : void
    {
        $this->solde = $nouveauSolde;
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
     * @param integer $nouveauDecouvert
     * @return void
     */
    public function setDecouvert(int $nouveauDecouvert) : void
    {
        $this->decouvert = $nouveauDecouvert;
    }


    /**
     * Undocumented function
     *
     * @return string
     */
    public function __toString() : string
    {
        $result = 'Le compte numéro ' . $this->numero . PHP_EOL 
            . ' dont le propriétaire est ' . $this->nom . PHP_EOL
            . ' a pour solde : '. $this->solde . PHP_EOL
            . ' et pour découvert autorisé : ' . $this->decouvert . PHP_EOL;
        return $result;
    }

}