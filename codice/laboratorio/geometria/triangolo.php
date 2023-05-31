<?php

class Triangolo extends Forma {

    public $s1, $s2, $s3;

    public function __construct($s1, $s2, $s3)
    {
        $this->nome = 'Triangolo';
        $this->s1 = $s1;
        $this->s2 = $s2;
        $this->s3 = $s3;
    }

    public function area()
    {
        $sp = $this->perimetro()/2;
        return sqrt( $sp * ($sp-$this->s1) * ($sp-$this->s2) * ($sp-$this->s3) );
    }

    public function perimetro()
    {
        return $this->s1 + $this->s2 + $this->s3 ;
    }

}