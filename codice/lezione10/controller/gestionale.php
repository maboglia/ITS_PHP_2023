<?php
    include "db/connessione.php"; //includo la connessione
    include "db/domandeDAO.php";  //includo il DAO

    if(isset($_POST["domanda"])) //controllo se mi hanno passato la domanda
    {
        if(trim($_POST["domanda"]) != "") 
        {
            $DAO = new DomandeDAO();
            $DAO->addDomanda($_POST["domanda"]);
        }        
    }
    if(isset($_GET["page"]) && $_GET["page"] == "list")
    {
        $DAO = new DomandeDAO();
        $domande = $DAO->findAll();
    }
?>