<?php

//Importing the connection details
require 'connection.php';

$user_name = $_POST["username"]; //String
$user_password = $_POST["password"]; //String
$port = $_POST["port"]; //String
$access = 0;

if ($port == "Select Port") {
    die("Invalid Port");
}

//Inserting to DB

$sql = "INSERT INTO credentials (username, password, port, access) VALUES (?, ?, ?, ?)"; //Quetion marks are placeholders

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

//Binding the values to Placeholders
mysqli_stmt_bind_param(
    $stmt,
    "sssi",
    $user_name,
    $user_password,
    $port,
    $access
);

mysqli_stmt_execute($stmt);

readfile("index.php");

mysqli_close($conn);