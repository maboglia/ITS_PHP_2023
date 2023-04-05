<h1>Sono content</h1>

<?php

if ( isset($_GET['pagina'])  ){
   
    switch ($_GET['pagina']) {
        case 'uno':
            include 'pagine/primi.html';
            break;
        
        case 'due':
            # code...
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
