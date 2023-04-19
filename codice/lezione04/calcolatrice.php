<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

    <input type="number" name="addendo1">
    <input type="number" name="addendo2">
    <input type="submit" value="addizione">
</form>

<?php 
include 'funzioni.php';

if (  isset($_POST['addendo1']) &&   isset($_POST['addendo2'])  ){
    $somma = addizione($_REQUEST['addendo1'], $_POST['addendo2']);

    echo $somma;
}

?>

</body>
</html>