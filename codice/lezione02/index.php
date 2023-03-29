<?php include "header.php";
?>
<?php include "menu.php";
?>
<?php

$variabile =  isset($_GET['pagina']) ? $_GET['pagina'] :  0 ;

switch ($variabile) {
	case 1:
		        include 'view/pagina1.php';
	
	break;
	
	case 2:
		        include 'view/pagina2.php';
	break;
	
	case 3:
	        include 'view/pagina3.php';
	break;
	
	default:
			        echo "HOME PAGE";
	break;
}




?>
<?php include "footer.php";
?>