<?php

require 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM issues where id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RIMS Issue Issues - NPA</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="form__container container-sm p-3">
        <h6 class="display-6 form__header mx-auto">Edit Issues</h6>
        <form action="update-issue.php?id=<?php echo $row['id']; ?>" method="post" class="form__body">

            <!-- Status -->
            <label for="status" class="form-label label status--label mt-3" id="status <?php echo $id; ?>">Status:</label>

            <select name="status" id="status" class="form-select form-select access--dropdown" required>
                <option value="">Select Status</option>
                <option value="0 <?php echo $row['status']; ?>" id="status">Pending</option>
                <option value="1 <?php echo $row['status']; ?>" id="status">Resolved</option>
            </select>
            <input class="btn btn-success btn-lg form-control mt-4" type="submit" name="submit" value="Edit" />
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer>Made by d3vd3511gn + Ini['oluwa'] + Rildwan for SA&DM</footer>

</html>