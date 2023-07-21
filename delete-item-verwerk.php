<?php
require_once dirname(__FILE__) . "/src/helper/debug.php";
require_once dirname(__FILE__) . "/src/repository/repository.php";
require_once dirname(__FILE__) . "/src/database/database.php";
$schoenId = $_GET['schoen_id'];

$response = Schoenenrepository::deleteSchoen($schoenId);
echo $response;
header("location:index.php");
