<?php
session_start();

if (!isset($_SESSION['loggato'])){
    die('Non puoi entrare');
}

?>

<h1>Posto Segreto</h1>