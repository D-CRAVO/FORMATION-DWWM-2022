<?php

require ".\ReseauBancaire.php";

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
        $result  = '';
        $nbReseauxBancaires = count($this->mesReseauxBancaires);
        for ($i = 0; $i < $nbReseauxBancaires; $i++)
        {
            $result .= $this->mesReseauxBancaires[$i] . PHP_EOL;
        }
        return $result;
    }


}

