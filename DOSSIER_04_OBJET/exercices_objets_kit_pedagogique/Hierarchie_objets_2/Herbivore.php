<?php

class Herbivore extends Animal
{
    public function manger() : string
    {
        $result = parent::manger() . 'des végétaux ';
        return $result;
    }
}