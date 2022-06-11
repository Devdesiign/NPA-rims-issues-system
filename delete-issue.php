<?php

require 'connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM issues WHERE id = '$id'";
mysqli_query($conn, $sql);

?>

<script>
    location.replace("dashboard.php");
</script>
<?php
mysqli_close($conn);
?>