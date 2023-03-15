<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php

/*
Questo file permette di giocare
a dadi.
*/



$dado1 = rand(1,6);

$dado2 = rand(1,6);

if ($dado1 == $dado2){
    echo 'hai vinto '.$dado1;
} else {
    //commento su una riga
    echo "Non hai vinto $dado1";
}

?>

<div>
    <img src="https://github.com/maboglia/ProgrammingResources/raw/master/images/dadi/f<?php echo $dado1; ?>.jpg" alt="">
    <img src="https://github.com/maboglia/ProgrammingResources/raw/master/images/dadi/f<?=$dado2?>.jpg" alt="">
</div>

<a href="?">refresh</a>

</body>
</html>