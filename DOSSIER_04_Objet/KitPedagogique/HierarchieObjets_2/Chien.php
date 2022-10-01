<?php

class Chien extends Animal
{
    private string $nom;

    public function __construct(string $_espece, string $_nom)
    {
        $this->nom = $_nom;
        $this->espece = parent::__construct($_espece);
    }

    public function manger() : string
    {
        return parent::manger() . 'de la patée, s\'appelle ' . $this->nom;
    }

    public function crier() : string
    {
        return parent::crier() . 'en aboyant, s\'appelle ' . $this->nom;
    }
}