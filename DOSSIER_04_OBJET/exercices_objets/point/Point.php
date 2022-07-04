<?php

class Point
{
    /**
     * Abscisse X du point
     *
     * @var float
     */
    private float $abscisseX;

    /**
     * Ordonnée Y du point
     *
     * @var float
     */
    private float $ordonneeY;

    /**
     * Constructeur
     *
     * @param float $abscisseX
     * @param float $ordonneeY
     * @param string $nom
     */
    public function __construct(string $nom, float $abscisseX = 0, float $ordonneeY = 0)
    {
        $this->abscisseX = $abscisseX;
        $this->ordonneeY = $ordonneeY;
        $this->nom = $nom;
    }

    /**
     * Retourne la valeur de l'abscisse X du point
     *
     * @return float
     */
    public function getAbscisseX() : float
    {
        return $this->abscisseX;
    }

    /**
     * Permet la modification de la valeur de l'abscisse X du point
     *
     * @param float $abscisseX
     * @return void
     */
    private function setAbscisseX(float $abscisseX) : void
    {
        $this->abscisseX = $abscisseX;
    }

    /**
     * Retourne la valeur de l'ordonnée Y du point
     * 
     * @return float
     */
    public function getOrdonneeY() : float
    {
        return $this->ordonneeY;
    }

    /**
     * Permet la modification de la valeur de l'ordonnée Y du point
     * 
     * @param float $ordonneeY
     * @return void
     */
    private function setOrdonneeY(float $ordonneeY)
    {
        $this->ordonneeY = $ordonneeY;
    }


    public function getNom() : string
    {
        return $this->nom;
    }

    private function setNom(string $nom) :void
    {
        $this->nom = $nom;
    }

    /**
     * Déplace le point sélectionné de ses coordonnées d'origine
     * vers les nouvelles coordonnées $abscisseX et $ordonneeY
     *
     * @param float $abscisseX  Nouvelle valeur de l'abscisse
     * @param float $ordonneeY  Nouvelle valeur de l'ordonnée
     * @return string
     */
    public function deplacer(float $abscisseX, float $ordonneeY) : string
    {
        $this->abscisseX = $abscisseX;
        $this->ordonneeY = $ordonneeY;
        return 'Changement de coordonnées effectuée.' . PHP_EOL;
    }

    /**
     * Affichage
     *
     * @return string
     */
    public function __toString() : string
    {
        $result = 'Le point '. $this->nom . ' a pour abscisse X la valeur ' . $this->abscisseX
         . ' et pour ordnonnée Y la valeur ' . $this->ordonneeY . " soit : ($this->abscisseX , $this->ordonneeY)." . PHP_EOL;
        return $result;
    }
}

