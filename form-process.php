<?php

//Importing the connection details
require 'connection.php';

$port = $_POST["port"]; //String
$sen_number = $_POST["sen-number"]; //String
$status = $_POST["status"]; //String
$issue = $_POST["issue"]; //String

if ($issue == "") {
    die("Issue is empty");
}
if ($status == "Select Status") {
    die("Invalid Status");
}

//Inserting to DB

$sql = "INSERT INTO issues (port, sen_number, status, issue) VALUES (?, ?, ?, ?)"; //Quetion marks are placeholders

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

//Binding the values to Placeholders
mysqli_stmt_bind_param(
    $stmt,
    "ssss",
    $port,
    $sen_number,
    $status,
    $issue
);

mysqli_stmt_execute($stmt);

readfile("dashboard.php");

mysqli_close($conn);
