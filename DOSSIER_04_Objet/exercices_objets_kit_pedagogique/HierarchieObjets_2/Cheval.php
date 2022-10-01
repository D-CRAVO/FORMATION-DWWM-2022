<?php

Class Cheval extends Herbivore
{
    public function manger() : string
    {
        return parent::manger() . 'de l\'herbe et du foin.';
    }

    public function crier() : string
    {
        return parent::crier() . 'en hennissant.';
    }
}