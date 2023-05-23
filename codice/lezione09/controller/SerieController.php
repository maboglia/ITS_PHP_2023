<?php

include_once '../model/serie.php'; 
include_once '../database/connessione.php'; 

class SerieController {

    public function findAll(){

        //1 devo creare un oggetto di tipo connessione
        $miaconn = new Connessione();
        //2 devo connettermi al db
        $miaconn->connetti();
        //3 devo portare una query al db
        $risposta = $miaconn->getConnessione()->query("SELECT * FROM serie_tv");
        $risposta->setFetchMode(PDO::FETCH_CLASS, "Serie");

        $tutteLeSerie = array();

        while ($serie = $risposta->fetch()) {
            $tutteLeSerie[] = $serie;
        }

        return $tutteLeSerie;

    }






}



