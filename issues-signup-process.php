<?php

$user_name = $_POST["username"]; //String
$user_password = $_POST["password"]; //String
$port = $_POST["port"]; //String

if (!$user_name) {
    die("Username is empty");
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

$sql = "INSERT INTO credentials (username, password, port) VALUES (?, ?, ?)"; //Quetion marks are placeholders

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

//Binding the values to Placeholders
mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $user_name,
    $user_password,
    $port
);

mysqli_stmt_execute($stmt);

echo "<h3> User Created Successfully</h3><p>Please Proceed to Login</p>";
