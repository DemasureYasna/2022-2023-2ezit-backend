<?php

session_start();
require dirname(__FILE__) . "/src/helper/debug.php";
require dirname(__FILE__) . "/src/repository/repository.php";

$isIngelogd = false;

if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $password = $_POST["password"];
    $email = $_POST["email"];
    $user = Schoenenrepository::getUserByEmail($email);

    if ($user) {
        if ($password == $user->password) {
            $isIngelogd = true;
            $_SESSION["login_id"] = $user->id;
            $_SESSION["login_firstname"] = $user->firstname;
            $_SESSION["login_lastname"] = $user->lastname;
            $_SESSION["login_email"] = $user->email;
            header("location:index.php");
        } else {
            echo "de paswoorden komen niet overeen";
            $isIngelogd = false;
        }
    } else {
        echo "inloggen is mislukt";
    }
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede zit schoenen login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/screen.css">
</head>

<body>

    <article>
        <div class="container">
            <div class="row c-product">
                <div class="col-12 c-back">

                    <h1 class="c-product__titel">Inloggen</h1>

                    <a href="index.php" class="c-btn__detail c-btn__detail--back"><i class="bi bi-caret-left-fill"></i><span>Annuleren</span></a>
                </div>

                <?php if (!$isIngelogd) {   ?>

                    <div class="col-7">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
                            <div>
                                <div class="c-form__label">E-mailadres:</div>
                                <div class="c-form__input">
                                    <input type="email" name="email">
                                </div>
                            </div>

                            <div>
                                <div class="c-form__label">Wachtwoord:</div>
                                <div class="c-form__input">
                                    <input type="password" name="password">
                                </div>
                            </div>


                            <div>
                                <div class="c-form__input"><input type="submit" value="Inloggen" name="submit"></div>
                            </div>
                        </form>

                    <?php } ?>
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