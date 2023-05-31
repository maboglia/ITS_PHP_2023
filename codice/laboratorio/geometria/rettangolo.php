<?php

class Rettangolo extends Forma {

    public $base;
    public $altezza;

    public function __construct($base, $altezza){
        $this->nome = 'Rettangolo';
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area(){
        //echo 'ho usato il metodo del rettangolo<br>';
       return $this->base * $this->altezza;
    }
    public function perimetro(){
        return ($this->base + $this->altezza) *2;
    }

    // public function __toString(){
    //     return "Il rettangolo di base "
    //         . $this-> base . " e di altezza "
    //         . $this-> altezza . " ha superficie " 
    //         . $this-> area() . " e perimetro " . $this-> perimetro();
    // }
}