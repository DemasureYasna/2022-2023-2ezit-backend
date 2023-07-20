<?php
require dirname(__FILE__) . "/src/helper/auth.php";
require_once dirname(__FILE__) . "/src/helper/debug.php";
require_once dirname(__FILE__) . "/src/repository/repository.php";

$arrSchoenen = Schoenenrepository::getAllSchoenen();


$arrFilters = Schoenenrepository::getAllSchoenentypes();

$schoenId = $_GET['schoen_id'] - 1;


$isIngelogd = false;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede zit schoenen detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/screen.css">
</head>

<body>
    <main>
        <article>
            <div class="container">
                <div class="row c-product">
                    <div class="col-12 c-back">


                        <h1 class="c-product__titel"><?php echo $arrFilters[$arrSchoenen[$schoenId]->typeId - 1]->typeNaam ?></h1>

                        <a href="index.php" class="c-btn__detail c-btn__detail--back"><i class="bi bi-caret-left-fill"></i><span>Terug naar overzicht</span></a>
                    </div>


                    <div class='col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12'>
                        <?php
                        echo " <img class='c-product__image img-fluid' src='" . $arrSchoenen[$schoenId]->afbeelding . "'  alt='productfoto' height='500' width='500'>"
                        ?>
                    </div>

                    <div class='col-12 col-xxl-6 offset-xxl-1 col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 col-xs-12'>
                        <div class='c-product__info'>

                            <?php

                            echo "<h2 class='c-product__titel'>" . $arrSchoenen[$schoenId]->merk . "</h2>";
                            echo "<p class='c-product__beschrijving'>" . $arrSchoenen[$schoenId]->benaming . "</p>";
                            echo "<p class='c-product__price'>&euro;" . $arrSchoenen[$schoenId]->prijs . "</p>";

                            if ($arrSchoenen[$schoenId]->uitverkocht) {
                                echo "<p class='c-product__promo'>Dit model is momenteel uitverkocht</p>";
                            }

                            ?>
                        </div>

                        <div class='c-product__buttons'>

                            <?php
                            toonEditBtns();
                            ?>

                        </div>
                    </div>



                </div>
            </div>
        </article>

        <section>
            <div class="container">
                <div class="row c-cards">
                    <div class="col-12">

                        <?php
                        echo "<h2 class='c-product__titel'> Gelijkaardige " . $arrFilters[$arrSchoenen[$schoenId]->typeId - 1]->typeNaam . "</h2>";
                        ?>

                    </div>

                    <?php
                    foreach ($arrSchoenen as $schoen) {
                        if ($schoen->id != $arrSchoenen[$schoenId]->id) {
                            if ($schoen->typeId == $arrSchoenen[$schoenId]->typeId) {
                                echo "<div class='col-12 col-lg-3 col-md-6'>";
                                echo "<div class='card  card--soortgelijk'>";

                                if ($schoen->uitverkocht) {
                                    echo "<span class='position-absolute top-0 end-0 py-2 px-4 badge bg-primary'>Uitverkocht</span>";
                                };

                                echo "<img src='" . $schoen->afbeelding . "' class='card-img-top'>";
                                echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>" . $schoen->merk . "</h5>";
                                echo "<p class='card-text'>" . $schoen->benaming . "</p>";
                                echo "<h6 class='card-title'>€" . $schoen->prijs . "</h6>";
                                echo "<a href='detail.php?schoen_id=" . $schoen->id . "' class='c-btn'><span>Meer details</span><i class='bi bi-arrow-right c-btn__arrow'></i></a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                    }
                    ?>



                </div>
            </div>
        </section>

        <footer class="c-footer__bg">
            <div class="container">
                <div class="row">
                    <hr class="c-footer__line">
                    <div class="col-12 text-center">
                        <p class="c-footer__copy">&copy; 2023 - Dynamic Web Development</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>