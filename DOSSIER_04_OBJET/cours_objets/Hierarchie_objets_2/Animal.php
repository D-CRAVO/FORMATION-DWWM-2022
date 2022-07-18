<?php

Class Animal
{
    private string $espece;

    // public function getEspece() : string
    // {
    //     return $this->espece;
    // }

    public function seDeplacer() : string
    {
        $result = 'L\'animal ' . $this->espece . ' se déplace ';
        return $result;
    }

    public function manger() : string
    {
        $result = 'L\'animal ' . $this->espece . ' mange ';
        return $result;
    }

    public function crier() : string
    {
        return 'L\'animal ' . $this->espece . ' crie ';
    }

}