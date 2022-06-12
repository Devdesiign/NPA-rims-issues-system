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

$hq = "NPA HQ";
$lpc = "Lagos Port";
$apapa = "Tin-Can Port";
$rivers = "Rivers Port";
$onne = "Onne Port";
$delta = "Delta Port";
$calabar = "Calabar Port";

if ($count > 0) {
    if ($row['access'] == 0) {
        readfile("authorization-warning.php");
    } else {
        switch ($row['port']) {
            case $hq:
?>
                <script>
                    location.replace("dashboard.php");
                </script> <?php
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
                }
            } else {
                readfile("credentials-warning.php");
            }

            mysqli_free_result($result);

            mysqli_close($conn);
?>