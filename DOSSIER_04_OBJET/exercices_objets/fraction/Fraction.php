<?php

class Fraction
{
    /**
     * Numérateur de la fraction
     * Chiffre du dessus
     *
     * @var integer
     */
    private int $numerateur;

    /**
     * Denominateur de la fraction
     * Chiffre du dessous
     * 
     *
     * @var integer
     */
    private int $denominateur;

    /**
     * Constructeur
     *
     * @param integer $numerateur
     * @param integer $denominateur
     */
    public function __construct(int $numerateur = 1, int $denominateur = 1)
    {
        $this->numerateur = $numerateur;
        $this->denominateur = $denominateur;
    }

    /**
     * Retourne le numérateur de la fraction
     *
     * @return integer
     */
    public function getNumerateur() : int
    {
        return $this->numerateur;
    }

    /**
     * Permet la modification du numérateur de la fraction
     *
     * @param integer $numerateur
     * @return void
     */
    private function setNumerateur(int $numerateur) : void
    {
        $this->numerateur = $numerateur;
    }

    /**
     * Retourne le dénominateur de la fraction
     *
     * @return integer
     */
    public function getDenominateur() : int
    {
        return $this->denominateur;
    }

    /**
     * Permet la modification du dénominateur de la fraction
     *
     * @param integer $denominateur
     * @return void
     */
    private function setDenominateur(int $denominateur) : void
    {
        $this->denominateur = $denominateur;
    }

    /**
     * Opposé de fraction
     *
     * @return Fraction
     */
    public function oppose() : Fraction
    {
        $this->numerateur = - $this->numerateur;
        return $this;
    }

    /**
     * Inverse de fraction
     *
     * @return Fraction
     */
    public function inverse() : Fraction
    {
        $temporaire = $this->numerateur;
        $this->numerateur = $this->denominateur;
        $this->denominateur = $temporaire;
        return $this;
    }

    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        if ($this->denominateur === 0)
        {
            $result = 'Le dénominateur ne peut être égal à 0' . PHP_EOL;
        }
        else if ($this->denominateur === 1 || $this->numerateur === 0)
        {
            $result = "La fraction ayant pour numérateur $this->numerateur et pour dénominateur $this->denominateur donne $this->numerateur." . PHP_EOL;
        }
        else
        {
            $result = "La fraction ayant pour numérateur $this->numerateur et pour dénominateur $this->denominateur donne $this->numerateur/$this->denominateur." . PHP_EOL;
        }
        return $result;
    }
}

    