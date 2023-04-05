<?php 
     session_start(); 
    //la prima istruzione
?>


<?php

    if (isset($_POST['piatto'])){

        //echo $_POST['piatto'];
        //echo $_POST['tipo'];
                                    //       0                 1  
        $_SESSION['ricette'][] =  [$_POST['piatto'], $_POST['tipo']]; 

        header('Location: index.php?pagina=uno');

    }


?>

