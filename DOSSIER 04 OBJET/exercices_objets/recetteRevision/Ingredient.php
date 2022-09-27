<?php

Class Ingredient
{

    /** @var string $nom                   Nom de l'ingrédient */
    private string $nom;

    /** @var float $quantite               Quantité de l'ingrédient */

    private float $quantite;

    /** @var string $uniteDeMesure         Unité de mesure de l'ingrédient */
    private string $uniteDeMesure;

    /** @var Ustensiles[] $mesUstensiles   Liste d'ustensiles associés à un ingrédient */
    private array $mesUstensiles;



    /**
     * Retourne le nom de l'ingrédient
     *
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }



    /**
     * Le nom de l'ingrédient doit respecter les conditions :
     * - avoir deux caractères minimum
     * - être composé uniquement de lettres, chiffres et tiret -
     * 
     * Permet l'enregistrement du nom de l'ingrédient
     *
     * @param string $_nom
     * @return void
     */
    private function setNom(string $_nom) : void
    {
        if (strlen($_nom) >=2)
        {
            $this->nom = $_nom;
        }
        else
        {
            throw new Exception('Nom "' . $_nom . '" non valide');
        }
        
    }



    /**
     * Retourne la quantite de l'ingrédient
     *
     * @return float
     */
    public function getQuantite() : float
    {
        return $this->quantite;
    }



    /**
     * Permet l'enregistrement d'une quantité d'un ingrédient
     *
     * @param float $_quantite
     * @return void
     */
    public function setQuantite(float $_quantite) : void
    {
        $this->quantite = $_quantite;
    }



    /**
     * Retourne l'unité de mesure de l'ingrédient
     *
     * @return string
     */
    public function getUniteDeMesure() : string
    {
        return $this->uniteDeMesure;
    }



    /**
     * Permet l'enregistrement de l'unité de mesure de l'ingrédient
     *
     * @param string $_uniteDeMesure
     * @return void
     */
    public function setUniteDeMesure(string $_uniteDeMesure) : void
    {
        $this->uniteDeMesure = $_uniteDeMesure;
    }



    /**
     * Contructeur
     *
     * @param string $_nom              Nom de l'ingrédient
     * @param integer $_quantite        Quantité de l'ingrédient initialisé à 0 si non renseignée
     * @param string $_uniteDeMesure    Unité de mesure de l'ingrédient initialisé à 'grammes' si non renseignée
     */
    public function __construct(string $_nom, float $_quantite = 0, string $_uniteDeMesure = 'grammes')
    {
        $this->setNom($_nom);
        $this->setQuantite($_quantite);
        $this->setUniteDeMesure($_uniteDeMesure);
        $this->mesUstensiles[] = array();
    }
}
