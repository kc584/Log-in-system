<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname ="users";

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");