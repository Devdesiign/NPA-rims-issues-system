<?php

require 'connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM credentials WHERE id = '$id'";
mysqli_query($conn, $sql);

?>

<script>
    location.replace("credentials.php");
</script>
<?php
mysqli_close($conn);
?>