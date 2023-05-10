<?php

include 'user.php';

$studenti = array();

$studentiFile = file('studenti.csv');

foreach ($studentiFile as $studente) {

    $spaccato = explode(",", $studente);

    $studenti[] = new Studente($spaccato[0], $spaccato[1]);

}


echo '<pre>';
print_r($studenti);
echo '</pre>';


