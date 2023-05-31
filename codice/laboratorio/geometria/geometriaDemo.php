<?php

include 'forma.php';
include 'triangolo.php';
include 'rettangolo.php';
include 'quadrato.php';

$forme = [
    new Rettangolo(10,5),
    new Triangolo(3,4,5),
    new Quadrato(6),
    new Rettangolo(4,5),

];

foreach ($forme as $forma) {
    echo $forma;
}


