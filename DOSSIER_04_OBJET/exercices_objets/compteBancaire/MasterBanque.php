<?php

require "ReseauBancaire.php";

class MasterBanque
{
    /**
     * Contient tous les réseaux bancaires
     *
     * @var array
     */
    private array $mesReseauxBancaires;

    /**
     * Nombre de réseaux bancaires
     *
     * @var ReseauBancaire
     */
    private ReseauBancaire $nbReseauxBancaires;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->mesReseauxBancaires = [];
    }


    public function __toString() : string
    {
        
    }


}

