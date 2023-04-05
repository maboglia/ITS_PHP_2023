<h1>Sono content</h1>

<?php

if ( isset($_GET['pagina'])  ){
   
    switch ($_GET['pagina']) {
        case 'uno':
            include 'pagine/primi.php';
            break;
        
        case 'due':
            include 'pagine/form.html';
            break;
        
        case 'tre':
            # code...
            break;
        
        default:
            # code...
            break;
    }








}



?>
