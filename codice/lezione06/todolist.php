<?php

    $prodotti = [];

    $prodotti[] = "latte";
    $prodotti[] = "vino";
    $prodotti[] = "pane";
    $prodotti[] = "latte";

    $prodotti = array_unique($prodotti, SORT_STRING);
    sort($prodotti);
 
    foreach($prodotti as $prodotto) {
        echo $prodotto . "<br>";
    }
?>