<?php

class Pinscher extends Chien
{
    public function crier() : string
    {
        return parent::crier() . ' aboye à chaque fois qu\'il se déplace';
    }
}