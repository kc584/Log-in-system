<?php

include_once "models/db.php";
include_once "models/user.php";

if( ! isset($_POST["email"])) {
    header("Location /");
    exit;
}


$user = new User($connection, $_POST["email"], $_POST["password"]);
$user->insert();
var_dump($_POST);