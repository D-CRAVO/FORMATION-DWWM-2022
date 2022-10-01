<?php

class Labrador extends Chien
{
    public function seDeplacer() : string
    {
        return parent::seDeplacer() . 'une fois sur deux';
    }
}