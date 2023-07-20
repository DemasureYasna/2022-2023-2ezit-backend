<?php
require dirname(__FILE__) . "/src/helper/debug.php";
require dirname(__FILE__) . "/src/repository/repository.php";

$arrFilters = Schoenenrepository::getAllSchoenentypes();
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede zit schoenen create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/screen.css">
</head>

<body>
    <article>
        <div class="container">
            <div class="row c-product">
                <div class="col-12 c-back">

                    <h1 class="c-product__titel">Creeër een product</h1>

                    <a href="index.php" class="c-btn__detail c-btn__detail--back"><i class="bi bi-caret-left-fill"></i><span>Annuleren</span></a>
                </div>
                <div class="col-7">
                    <form action="create-item-verwerk.php" method="POST">
                        <div>
                            <div class="c-form__label">Naam van het product</div>
                            <div class="c-form__input">
                                <input type="text" name="titel">
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Merk</div>
                            <div class="c-form__input">
                                <input type="text" name="merk">
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Pad naar afbeelding</div>
                            <div class="c-form__input">
                                <input type="text" name="afbeelding">
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Prijs</div>
                            <div class="c-form__input">
                                <input type="text" name="prijs">
                            </div>
                        </div>

                        <div>
                            <div class=" c-form__label">Categorie
                            </div>
                            <div class="c-form__input" for="type">
                                <select class="c-form__select" name="categorie">
                                    <!-- toon alle categorie-opties in een dropdown -->

                                    <?php
                                    foreach ($arrFilters as $filter) {
                                        if ($filter->typeNaam != "Alle schoentypes") {
                                            echo "<option value='" . $filter->typeId . "'>" . $filter->typeNaam . "</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="c-form__uitverkocht">
                            <input class="form-check-input c-form__checkbox" type="checkbox" value="" name="uitverkocht">
                            <div class="c-form__label">Uitverkocht</div>

                        </div>
                        <div>
                            <div class="c-form__input"><input type="submit" value="Creëer product" name="submit"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>

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
</body>

</html>