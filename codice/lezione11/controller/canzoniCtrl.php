<?php

include_once './model/canzone.php';
include_once './db/connessione.php';

class CanzoniCtrl
{
    



    //tutteLecanzoni
    public function findaAll()
    {
        
        $conn = new Connessione();
        $conn->connetti();

        $query = "SELECT * FROM canzoni";
        $risposta = $conn->getConnessione()->query($query);
        $risposta->setFetchMode(PDO::FETCH_CLASS, "Canzone");

        $canzoni = [];

        while ($canzone = $risposta->fetch()) {
            $canzoni[] = $canzone;
        }

        return $canzoni;


    }
    //getCanzoneByID

    //addCanzone

    //deleteCanzone





}




