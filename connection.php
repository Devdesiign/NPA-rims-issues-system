<?php

//Connection Details

$host = "localhost";
$username = "root";
$password = "";
$dbname = "rimsissues_db";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if (mysqli_connect_errno()) {
    die("Connection Error" . mysqli_connect_error());
}
