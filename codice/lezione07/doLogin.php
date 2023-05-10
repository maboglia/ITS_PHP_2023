<?php

var_dump($_POST);




if (    login($_POST['username'],$_POST['password'])       ){

    header("Refresh:1; url=page2.php");

} else {
    header("Refresh:1; url=index.php");

}

function login($user, $passw){

    //1 chiedi al database se esiste un user con queste credenziali
    if (    $user == 'mauro@its.it' && $passw  == 12345    ){
        return true;
    } 
    //2 ritorna user se esiste

    //3 ritorna false senon esiste
    return false;


}



