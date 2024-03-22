<?php

include_once 'models/db.php';
include_once 'models/user.php';

$u = new User($connection, $_POST['email'], $_POST['password']);

$u->authenticate();

if ($u->is_logged_in()) {
    session_start();
    $_SESSION['user'] = serialize($u);

    header("Location: index.php");
} else {
    echo "could not log in with these credentials";
}