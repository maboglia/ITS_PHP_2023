<?php 

try {
    $con = new PDO("mysql:host=localhost;dbname=PHP2023","root","");
    
    }catch(PDOException $e){
        
        echo $e->getMessage();
    }

?>