<?php
require dirname(__FILE__) . "/src/helper/debug.php";
require dirname(__FILE__) . "/src/repository/repository.php";


if (isset($_POST["submit"])) {
    $productId = $_POST["id"];
    $productNaam = $_POST["titel"];
    $productMerk = $_POST["merk"];
    $productAfbeelding = $_POST["afbeelding"];
    $productPrijs = $_POST["prijs"];
    $productCategorie = $_POST["categorie"];

    if (isset($_POST["uitverkocht"])) {
        $blnproductPromo = 1;
    } else {
        $blnproductPromo = 0;
    }


    $aantalRijen = Schoenenrepository::updateSchoen($productId, $productNaam, $productMerk,  $productAfbeelding, $blnproductPromo,  $productPrijs,  $productCategorie);

    if ($aantalRijen > 0) {
        header("location:index.php");
        echo "update gelukt";
    } else {
        echo "update is mislukt";
    }
} else {
    echo "update mislukt";
}
