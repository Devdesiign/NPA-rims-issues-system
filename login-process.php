<?php
require 'connection.php';

$user_name = $_POST["username"]; //String
$user_password = $_POST["password"]; //String
// $port = $_POST["port"]; //String
// $access = 0;

$sql = "SELECT * FROM credentials where username ='$user_name' and password ='$user_password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($count > 0) {
    if ($row['access'] == 0) {
        readfile("authorization-warning.php");
    } else {
        readfile("dashboard.php");
    }
} else {
    readfile("credentials-warning.php");
}

mysqli_free_result($result);

mysqli_close($conn);
