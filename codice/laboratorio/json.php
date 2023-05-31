<?php

$frutti = [];

$frutti[] = 'mela';
array_push($frutti, 'pera');

header('Content-Type:application/json');
echo json_encode($frutti);


?>