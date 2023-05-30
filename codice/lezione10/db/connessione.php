<?php

class Connessione
{
    private $connessione = NULL;
    public function connetti()
    {
        try {
            $this->connessione = new PDO("mysql:host=localhost:3306;dbname=php2023", "root", "");
        } catch (PDOException $eccezione) {
            echo "si è verificata un'eccezione durante la connessione " . $eccezione->getMessage();
        }
    }

    public function getConnessione()
    {
        return $this->connessione;
    }

    public function disconnetti()
    {
        if ($this->connessione != NULL) {
            $this->connessione = null;
        }
    }
}

?>