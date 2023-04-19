<?php

    session_start();
    // Definizione della costante
    define("TITOLO", "Lista della spesa");
    // deve essere settata e non deve essere vuota
    if(isset($_POST['toDo']) && !empty($_POST['toDo'])){
        $cosaDaComprare = $_POST['toDo'];
        // [] è come dire push, quindi stai mettendo in coda al carrello il cosaDaComprare
        $_SESSION["carrello"][] = $cosaDaComprare;
    }

    if(isset($_POST['pulizia'])){
        // unset pulisce la variabili, come se non fosse mai stata dichiarata/esistita
        unset($_SESSION["carrello"]);
    }

    if(isset($_POST['selezionato'])){
        var_dump($_POST['selezionato']);
        foreach($_POST['selezionato'] as $elimina){
            array_splice($_SESSION["carrello"],$elimina, 1);
        }
    }

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stampa della costante titolo, le costanti non hanno il dollaro davanti -->
    <title><?= TITOLO ?></title>
</head>
<body>
    <h1><?= TITOLO ?></h1>

    <form action="" method="post">
        <label for="toDo">Oggetto da comprare</label>
        <!-- quello che conta per PHP è il valore di name -->
        <input type="text" name="toDo" id="toDo">
        <input type="submit" value="add">
    </form>

    <form action="" method="post">
        <input type="submit" value="clear" name="pulizia">
    </form>

    <?php if(isset ($_SESSION["carrello"])):?>

        <form action="" method="post">
            <ul>
                <?php $i = 0; ?>
                <!-- Per ogni oggetto del carrello... -->
                <?php foreach ($_SESSION["carrello"] as $cosa):  ?>
                <li> <input type="checkbox" name="selezionato[]" value="<?= $i++ ?>"> <?= $cosa ?> </li>
                <?php endforeach; ?>
            </ul>
            <input type="submit" value="clear selected">
        </form>
    
    <?php endif; ?>

</body>
</html>