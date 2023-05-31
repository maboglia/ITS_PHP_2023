<?php

class Quadrato extends Rettangolo {
    public $lato;

    public function __construct($lato){
        parent::__construct($lato, $lato);
        $this->lato = $lato;
        $this->nome = 'Quadrato';
    }

    public function area(){
        //echo 'ho usato il metodo del quadrato<br>';
        return $this->lato * $this->lato;
    }
}
