<?php
    include "canzone.php";

    $discografia = [];

    // $canzone1->id = 1;
    // $canzone1->cantante = "Pippo";
    // $canzone1->titolo = "Sono un cane";

    //echo $canzone1->stampa();

    $canzoni = file("songs.txt");

    foreach ($canzoni as $canzone) {
       $riga = explode(";", $canzone);
       $discografia[] = new Canzone($riga[0], $riga[1], $riga[2]);
       
    }
?>