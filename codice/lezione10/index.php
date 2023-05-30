<?php include "view/header.php"; ?>
<?php include "view/navbar.php"; ?>
<?php include "controller/gestionale.php"; ?>
<?php 

    //          condizione          se è vero       se è falso
    $pagina = isset($_GET["page"]) ? $_GET["page"] : "home";
    switch ($pagina)
        {
            case "add":
                echo "hai scelto add";
                include "view/form.php";
                break;
            case "list":
                echo "hai scelto list";
                
                include "view/list.php";
                break;
            case "home":
                echo "hai scelto home";
                include "view/home.php";
                break;
            default:
            echo "scelta non disponibile";
                break;
        }
?>
<?php include "view/footer.php"; ?>