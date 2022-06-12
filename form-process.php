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
    "ssis",
    $port,
    $sen_number,
    $status,
    $issue
);

mysqli_stmt_execute($stmt);

$sql2 = "SELECT * FROM credentials";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_array($result);

$hq = "NPA HQ";
$lpc = "Lagos Port";
$apapa = "Tin-Can Port";
$rivers = "Rivers Port";
$onne = "Onne Port";
$delta = "Delta Port";
$calabar = "Calabar Port";

switch ($row['port']) {
    case $hq:
?>
        <script>
            location.replace("dashboard.php");
        </script>
    <?php
        break;
    case $lpc:
    ?><script>
            location.replace("lpc-dashboard.php");
        </script>
    <?php
        break;
    case $apapa: ?>
        <script>
            location.replace("apapa-dashboard.php");
        </script>
    <?php
        break;
    case $rivers:
    ?><script>
            location.replace("rivers-dashboard.php");
        </script>
    <?php
        break;
    case $onne:
    ?>
        <script>
            location.replace("onne-dashboard.php");
        </script>
    <?php
        break;
    case $delta:
    ?>
        <script>
            location.replace("delta-dashboard.php");
        </script>
    <?php
        break;
    case $calabar:
    ?><script>
            location.replace("calabar-dashboard.php");
        </script>
<?php
}
?>