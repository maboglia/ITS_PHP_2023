<?php

include 'user.php';

session_start();

if(!isset($_SESSION["user"])){
    die("Utente non collegato!");
}

$studente = $_SESSION["user"];

?>

<h1>Pagina segreta di <?= $studente->nome ?></h1>