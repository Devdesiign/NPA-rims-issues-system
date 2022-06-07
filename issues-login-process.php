<?php

//Importing the connection details
require 'connection.php';

$user_name = $_POST["username"]; //String
$user_password = $_POST["password"]; //String

//SQL Declarations
$sql1 = "SELECT * FROM credentials WHERE username = '$user_name' and password = '$user_password' and access = 'Authorized User'";


$result1 = mysqli_query($conn, $sql1);
$count1 = mysqli_num_rows($result1);



if ($count1 > 0) {
    echo "Login";
} else {
    echo "NOT Login";
}
