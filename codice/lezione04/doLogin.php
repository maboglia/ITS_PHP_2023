<?php

session_start();

var_dump($_POST);

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'pippo' && $password == '12345'){
        $_SESSION['loggato'] = 500;
        include 'areaRiservata.php';
    } else {
        unset($_SESSION['loggato']);
        header('Location:login.html');
    }


}







?>