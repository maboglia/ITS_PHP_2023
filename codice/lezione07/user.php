<?php

class Studente{

    public $nome;
    public $cognome;
    public $username;
    public $password;

    public function __construct($nome, $cognome /*, $username, $password */){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->username = substr($nome, 0, 3) .substr($cognome, 0, 3);
        /* $this->username = substr($nome, 0, 3) .substr($cognome, 0, 3) .date("si"); */
        $this->password = 'robert';
    }

    public function __toString(){
        return $this->nome . '' .$this->cognome;
    }
}

?>