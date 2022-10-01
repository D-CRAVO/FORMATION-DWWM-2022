<?php

class Girafe extends Herbivore
{
   public function seDeplacer() : string
   {
        return parent::seDeplacer() . 'doucement.';
   } 

   public function crier() : string
   {
        return parent::crier() . 'en meuglant.';
   }
}