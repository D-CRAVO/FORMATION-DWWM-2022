<?php

class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data){
        $this->data = $data;
    }

    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($name){
        return $this->surround('<input type="text" name ="' . $name . '">');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}