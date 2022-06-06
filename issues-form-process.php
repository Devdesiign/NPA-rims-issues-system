<?php

$port = $_POST["port"]; //Integer
$sen_number = $_POST["sen-number"]; //String
$status = $_POST["status"]; //String
$issues = $_POST["issues"]; //String

if (!$issues) {
    die("Issue is empty");
}

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

//Inserting to DB

$sql = "INSERT INTO issues (port, sen_number, status, issues) VALUES (?, ?, ?, ?)"; //Quetion marks are placeholders

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
    $issues
);

mysqli_stmt_execute($stmt);

echo "<h2>The issue has been captured successfully!</h2>";
