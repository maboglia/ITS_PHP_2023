<?php

class Rettangolo {

    public $base;
    public $altezza;

    public function __construct($base, $altezza){
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area(){
        echo 'ho usato il metodo del rettangolo<br>';
       return $this->base * $this->altezza;
    }
    public function perimetro(){
        return ($this->base + $this->altezza) *2;
    }

    public function __toString(){
        return "Il rettangolo di base "
            . $this-> base . " e di altezza "
            . $this-> altezza . " ha superficie " 
            . $this-> area() . " e perimetro " . $this-> perimetro();
    }
}

class Quadrato extends Rettangolo {
    public $lato;

    public function __construct($lato){
        parent::__construct($lato, $lato);
    }

    public function area(){
        echo 'ho usato il metodo del quadrato<br>';
        return $this->lato * $this->lato;
    }
}



$stanze = [
    new Rettangolo(10,5),//50
    new Rettangolo(10,4),//40
    new Rettangolo(5,5),//25
    new Rettangolo(4,5),//20
    new Quadrato(5)//25
];
$superficie = 0;
foreach ($stanze as $stanza) {
    $superficie += $stanza->area();
}
echo $superficie;



