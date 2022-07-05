<?php
/**
 * Classe Fraction
 * @author David CRAVO <contact@davidcravo.fr>
 */
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
     * Détermine si la fraction à comparer est supérieure à la fraction $fraction
     *
     * @param Fraction $fraction
     * @return boolean
     */
    public function superieurA(Fraction $fraction) : string
    {
        if ($this->denominateur !== 0 && $fraction->denominateur !== 0)
        {
            $numeriqueA = $this->numerateur / $this->denominateur;
            $numerique = $fraction->numerateur / $fraction->denominateur;
            $result = $numeriqueA > $numerique ? 'true' : 'false';
        }
        else
        {
            $result = 'Le dénominateur ne peut être égal à 0';
        }
        return $result;
    }

    /**
     * Vérifie si la fraction à comparer est égale à la fraction $fraction 
     *
     * @param Fraction $fraction
     * @return void
     */
    public function egalA(Fraction $fraction)
    {
        if ($this->denominateur !== 0 && $fraction->denominateur !== 0)
        {
            $numeriqueA = $this->numerateur / $this->denominateur;
            $numerique = $fraction->numerateur / $fraction->denominateur;
            $result = $numeriqueA === $numerique ? 'true' : 'false';
        }
        else
        {
            $result = 'Le dénominateur ne peut être égal à 0';
        }
        return $result;
    }

    /**
     * Calcule le plus grand denomitateur commun
     * des numérateur et dénominateur
     *
     * @return integer
     */
    public function getPgcd() : int
    {
        $a = $this->numerateur;
        $b = $this->denominateur;
        $pgcd = 1;
        if ($a !== 0 && $b !== 0)
        {
            $a = $a < 0 ? -$a : $a;
            $a = $a < 0 ? -$a : $a;
            while ($a != $b)
            if ($a < $b)
            {
                $b = $b - $a;
            }
            else
            {
                $a = $a - $b;
            }
            $pgcd = $a;
        }
        return $pgcd;
    }

    /**
     * Réduit la fraction à réduire en fonction 
     * à l'aide de la fonction getPgcd
     *
     * @return Fraction
     */
    public function reduire() : Fraction
    {
        $pgcd = $this->getPgcd();
        $this->numerateur /= $pgcd;
        $this->denominateur /= $pgcd;
        return $this; 
    }

    /**
     * Additionne 2 fractions
     * et réduit la fraction obtenue
     *
     * @param Fraction $fraction
     * @return Fraction
     */
    public function plus(Fraction $fraction) : Fraction
    {
        $this->numerateur *= $fraction->denominateur;
        $fraction->numerateur *= $this->denominateur;
        $numerateur = $this->numerateur + $fraction->numerateur;
        $denominateur = $this->denominateur * $fraction->denominateur;
        $fractionPlus = new Fraction($numerateur, $denominateur);
        $fractionReduite = $fractionPlus->reduire();
        return $fractionReduite;
    }

    /**
     * Soustrait la fraction $fraction à la fraction sélectionnée
     * et réduit la fraction obtenue
     *
     * @param Fraction $fraction
     * @return Fraction
     */
    public function moins(Fraction $fraction) : Fraction
    {
        $this->numerateur *= $fraction->denominateur;
        $fraction->numerateur *= $this->denominateur;
        $numerateur = $this->numerateur - $fraction->numerateur;
        $denominateur = $this->denominateur * $fraction->denominateur;
        $fractionMoins = new Fraction($numerateur, $denominateur);
        $fractionReduite = $fractionMoins->reduire();
        return $fractionReduite;
    }

    //public function multiplie()


    /**
     * Affichage
     *
     * @return string
     */
    public function __toString()
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

    