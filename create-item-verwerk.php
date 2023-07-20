<?php
require dirname(__FILE__) . "/src/helper/debug.php";
require dirname(__FILE__) . "/src/repository/repository.php";


if (isset($_POST["submit"])) {
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


    $arrSchoenen = Schoenenrepository::getAllSchoenen();

    $productId = end($arrSchoenen)->id + 1;


    $aantalRijen = Schoenenrepository::createSchoen($productId, $productNaam, $productMerk,  $productAfbeelding, $blnproductPromo,  $productPrijs,  $productCategorie);

    if ($aantalRijen > 0) {
        header("location:index.php");
        echo "toevoegen gelukt";
    } else {
        echo "toevoegen mislukt";
    }
} else {
    echo "toevoegen mislukt";
}
