<?php

require 'connection.php';
$id = $_GET['id'];

$status = $_POST['status'];
$sql = "UPDATE issues SET status = '$status' WHERE id = '$id'";
mysqli_query($conn, $sql);

?>

<script>
    location.replace("dashboard.php");
</script>
<?php
mysqli_close($conn);
?>