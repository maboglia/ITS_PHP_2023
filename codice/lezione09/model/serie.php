<?php

class Serie {

    private $id;
    private $titolo;
    private $immagine;
    private $rating;
    private $language;
    private $summary;

    // public function __construct($id, $titolo, $immagine, $rating, $language, $summary){
    //     $this->id = $id;
    //     $this->titolo = $titolo;
    //     $this->immagine = $immagine;
    //     $this->rating = $rating;
    //     $this->language = $language;
    //     $this->summary = $summary;
    // }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __toString(){
        return $this->titolo . " " . $this->summary;
    }

}

