<?php
    include "model/domanda.php";
    class DomandeDAO
    {
        public function addDomanda($domanda)
        {
            $query = "INSERT INTO domande (testo) VALUES (:domanda)";
            $miaconn = new Connessione();

            $miaconn->connetti();
            $richiesta = $miaconn->getConnessione()->prepare($query);
            $richiesta->bindParam(":domanda", $domanda, PDO::PARAM_STR);
            $richiesta->execute();
        }




        public function findAll()
        {
            $richiesta = "SELECT * FROM domande";

            $miaconn = new Connessione();

            $miaconn->connetti();

            $risposta = $miaconn->getConnessione()->query($richiesta);
            $risposta->setFetchMode(PDO::FETCH_CLASS, "Domanda");

            $tutteLeDomande = array();

            while ($domanda = $risposta->fetch()) {
                $tutteLeDomande[] = $domanda;
            }

            return $tutteLeDomande;
        }
    }

?>