<?php
require_once dirname(__FILE__) . "/src/helper/debug.php";
require_once dirname(__FILE__) . "/src/repository/repository.php";

$arrSchoenen = Schoenenrepository::getAllSchoenen();


$arrFilters = Schoenenrepository::getAllSchoenentypes();

/* Dit haalt de variabel ?lamp_id in de url eruit en steekt het in de variabel $lampid */
$schoenId = $_GET['schoen_id'] - 1;

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


                        <h1 class="c-product__titel"><?php $arrFilters[$arrSchoenen[$schoenId]->typeId - 1]->typeNaam ?></h1>

                        <a href="index.php" class="c-btn__detail c-btn__detail--back"><i class="bi bi-caret-left-fill"></i><span>Terug naar overzicht</span></a>
                    </div>


                    <div class='col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                        <?php
                        echo " <img class='c-product__image img-fluid' src='" . $arrSchoenen[$schoenId]->afbeelding . "'  alt='productfoto' height='500' width='500'>"
                        ?>
                    </div>

                    <div class='col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12'>
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

                            echo " <a href='create-item.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-plus-lg c-icon c-icon--add'></i>Item toevoegen</a>";
                            echo "<a href='update-item.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-pencil-fill c-icon'></i></a>";
                            echo " <a href='delete-item.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-trash-fill c-icon'></i></a>";

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
                        <h2 class="c-product__titel"> Gelijkaardige sportschoenen</h2>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card card--soortgelijk">
                            <img src="images/adidas-performance.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">adidas Performance</h5>
                                <p class="card-text">RUNFALCON 3 0 - Sportschoenen</p>
                                <h6 class="card-title">€59,95</h6>
                                <a href="detail.html" class="c-btn"><span>Meer details</span><i class="bi bi-arrow-right c-btn__arrow"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card card--soortgelijk">
                            <img src="images/jack-wolfskin.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jack Wolfskin</h5>
                                <p class="card-text">SEATTLE 365 - Sportschoenen</p>
                                <h6 class="card-title">€59,99</h6>
                                <a href="detail.html" class="c-btn"><span>Meer details</span><i class="bi bi-arrow-right c-btn__arrow"></i></a>
                            </div>
                        </div>
                    </div>
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