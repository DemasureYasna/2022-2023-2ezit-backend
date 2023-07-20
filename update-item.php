<?php
require dirname(__FILE__) . "/src/helper/debug.php";
require dirname(__FILE__) . "/src/repository/repository.php";

$arrSchoenen = Schoenenrepository::getAllSchoenen();

$arrFilters = Schoenenrepository::getAllSchoenentypes();

$schoenId = $_GET['schoen_id'];

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede zit schoenen update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/screen.css">
</head>

<body>
    <article>
        <div class="container">
            <div class="row c-product">
                <div class="col-12 c-back">

                    <h1 class="c-product__titel">Update dit product</h1>

                    <a href="index.php" class="c-btn__detail c-btn__detail--back"><i class="bi bi-caret-left-fill"></i><span>Annuleren</span></a>
                </div>
                <div class="col-7">
                    <form action="update-item-verwerk.php" method="POST">
                        <div>
                            <div class="c-form__label">Naam van het product</div>
                            <div class="c-form__input">
                                <input type="text" name="titel" value=<?php echo $arrSchoenen[$schoenId]->benaming; ?>>
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Merk</div>
                            <div class="c-form__input">
                                <input type="text" name="merk" value=<?php echo $arrSchoenen[$schoenId]->merk; ?>>
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Pad naar afbeelding</div>
                            <div class="c-form__input">
                                <input type="text" name="afbeelding" value=<?php echo $arrSchoenen[$schoenId]->afbeelding; ?>>
                            </div>
                        </div>

                        <div>
                            <div class="c-form__label">Prijs</div>
                            <div class="c-form__input">
                                <input type="text" name="prijs" value=<?php echo $arrSchoenen[$schoenId]->prijs; ?>>
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


                            <?php
                            if ($arrSchoenen[$schoenId]->uitverkocht) {
                                echo " <input class='form-check-input c-form__checkbox' type='checkbox' value='' name='uitverkocht' checked>";
                            } else {
                                echo " <input class='form-check-input c-form__checkbox' type='checkbox' value='' name='uitverkocht' >";
                            }
                            ?>

                            <div class="c-form__label">Uitverkocht</div>

                        </div>
                        <div>
                            <div class="c-form__input"><input type="submit" value="Update product" name="submit"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
</body>

</html>