<?php

abstract class Forma {
    public $nome;

    abstract public function area();

    abstract public function perimetro();

    public function __toString(){
        return "*******************<br>Forma: " . $this->nome ."<br> "
            ."Area: " . $this->area() ."<br> "
            ."Perimetro: " . $this->perimetro() ."<br>*******************<br>";
    }

}
