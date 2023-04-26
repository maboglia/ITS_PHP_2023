<?php

    class Canzone {
        public $id;
        public $cantante;
        public $titolo;
       
        public function __construct($id, $cantante, $titolo){
            $this->id=$id;
            $this->cantante=$cantante;
            $this->titolo=$titolo;
        } 

        public function stampa(){
            return $this->id . " - " . $this->cantante . " - " . $this->titolo;
        }

        public function toHtml(){

            return "<tr>" 
                . "<td>" . $this->id . "</td>" 
                . "<td>" . "<a href='https://www.google.com/search?q= " . urlencode($this->cantante) . "'>" . $this->cantante . "</a>" . "</td>" 
                . "<td>" . "<a href='https://www.google.com/search?q= " . urlencode ($this->titolo) . "'>" . $this->titolo . "</a>" . "</td>" 
            . "</tr>";
        }

    }

?>