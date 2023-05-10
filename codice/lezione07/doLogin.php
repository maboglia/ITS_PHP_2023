<?php 

include 'registro.php';

$registro = new Registro();
$studente = $registro->login($_POST["username"], $_POST["password"]);



if(isset ($studente) && $studente != "assente"){

    session_start();

    $_SESSION["user"] = $studente;

    header("Refresh:1; url=page2.php"); // Se giusto ti porta alla page2

}else{

    header("Refresh:1; url=index.php"); // Se giusto si ricarica la pagina 

}

?>
