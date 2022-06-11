<?php

require 'connection.php';
$id = $_GET['id'];

$access = $_POST['access'];
$sql = "UPDATE credentials SET access = '$access' WHERE id = '$id'";
mysqli_query($conn, $sql);

?>

<script>
    location.replace("credentials.php");
</script>
<?php
mysqli_close($conn);
?>