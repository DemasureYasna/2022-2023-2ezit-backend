<?php
require dirname(__FILE__) . "/src/helper/auth.php";
require_once dirname(__FILE__) . "/src/helper/debug.php";
require_once dirname(__FILE__) . "/src/repository/repository.php";

$arrSchoenen = Schoenenrepository::getAllSchoenen();

$arrFilters = Schoenenrepository::getAllSchoenentypes();


if (isset($_GET['filter_Id'])) {
    $filterId = $_GET['filter_Id'];
} else {
    $filterId = 5;
}

?>



<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede zit schoenen index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/screen.css">
</head>

<body>
    <header class="c-header">
        <h1>Foot Fashion</h1>
        <p class="c-header__caption">Stap in stijl</p>
    </header>


    <div class="container">
        <div class="row c-filters__bg">
            <div class="col-lg-12">
                <div class="c-filters">

                    <?php
                    foreach ($arrFilters as $filter) { ?>

                        <a href="index.php?filter_Id=<?php echo $filter->typeId; ?>"><span class="c-filter"><?php echo $filter->typeNaam; ?></span></a>

                    <?php
                    }
                    ?>

                </div>
            </div>


        </div>
    </div>


    <section>
        <div class="container">
            <div class="row c-cards">

                <?php

                foreach ($arrSchoenen as $schoen) {



                    if ($schoen->typeId == $filterId || $filterId == 5) {

                        echo "<div class='col-12 col-lg-3 col-md-6'>";
                        echo "<div class='card'>";

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

                    <div class="c-admin">

                        <?php toonLogin(); ?>


                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>