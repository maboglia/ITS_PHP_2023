<?php

include 'controller/canzoniCtrl.php';

$ctrl = new CanzoniCtrl();

// echo "<pre>";
// print_r($ctrl->findaAll());
// echo "</pre>";

header("Content-Type:application/json");
echo json_encode($ctrl->findaAll());
