<?php

include '../config/config.inc.php';

try {
    $connessione = new PDO(HOST, USER, PASSW);
    
    $query = "INSERT INTO serie_tv (`titolo`, `immagine`, `rating`, `language`, `summary`) 
        VALUES (:titolo, :img, :rating,:lang, :summary)
    ";
    
    $statement = $connessione->prepare($query);
    $statement->bindParam(':titolo',  $_POST['nomeSerie'], PDO::PARAM_STR);
    $statement->bindParam(':img',  $_POST['locandina'], PDO::PARAM_STR);
    $statement->bindParam(':rating', $_POST['rating'], PDO::PARAM_STR);
    $statement->bindParam(':lang',  $_POST['language'], PDO::PARAM_STR);
    $statement->bindParam(':summary',  $_POST['summary'], PDO::PARAM_STR);
    $statement->execute();

  
    header("Location: ../index.php" );

} catch (PDOException $eccezione) {
    echo "si è verificata un'eccezione: $eccezione";
}




