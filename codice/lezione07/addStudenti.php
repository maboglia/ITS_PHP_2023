<?php 

include "connessione.php";

try{
	$stmt =  $con->prepare("INSERT INTO studenti (nome,cognome) VALUES(:nome , :cognome)");
	
	$nome = "Robert";
	$cognome = "Neagu";
	
	$stmt->bindParam(":nome" , $nome , PDO::PARAM_STR);
	$stmt->bindParam(":cognome" , $cognome , PDO::PARAM_STR);
	
	if($stmt->execute()){
		
		echo "Inserita la riga con id : " . $con->lastInsertId();
		
	}
	
	
}
catch(PDOException $ex){
	echo $ex->getMessage();
}

?>