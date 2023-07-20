<?php
session_start();
function toonLogin()
{

    if (isset($_SESSION["login_firstname"])) {
        echo "<a href='logout.php' class='c-admin'>";
        echo "Welkom, " . $_SESSION["login_firstname"] . " je kan <i class='bi bi-box-arrow-left' style='margin-right: 8px'></i>uitloggen";
        echo "</a>";
    } else {

        echo "<a href='login.php' class='c-admin'>";
        echo "admin";
        echo "</a>";
    }
}

function toonEditBtns()
{

    $schoenId = $_GET['schoen_id'] - 1;

    if (isset($_SESSION["login_firstname"])) {
        echo " <a href='create-item.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-plus-lg c-icon c-icon--add'></i>Item toevoegen</a>";
        echo "<a href='update-item.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-pencil-fill c-icon'></i></a>";
        echo " <a href='delete-item-verwerk.php?schoen_id=" . $schoenId . "' class='c-btn__detail'><i class='bi bi-trash-fill c-icon'></i></a>";
    }
}
