<?php

//Importing the connection details
require 'connection.php';

$user_name = $_POST["username"]; //String
$user_password = $_POST["password"]; //String
$port;
$access;
$sql = "SELECT * FROM credentials WHERE username = '$user_name' and password = '$user_password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo "Login";
} else {
    echo "Nonsense";
}
