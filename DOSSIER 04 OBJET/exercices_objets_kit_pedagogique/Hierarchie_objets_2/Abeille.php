<?php

class Abeille extends Herbivore
{
    public function seDeplacer() : string
    {
        return parent::seDeplacer() . 'en volant';
    }

    public function manger() : string
    {
        return parent::manger() . 'précisément du nectar';
    }

    public function crier() : string
    {
        return parent::crier() . 'en bourdonnant';
    }
}