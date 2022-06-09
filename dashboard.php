<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RIMS Issue Dashboard - NPA</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="table-responsive mx-auto" style="max-width: 95vw !important;">
    <h6 class="display-6 text-center mt-2">Dashboard</h6>
    <table class="table table-striped table-bordered table-hover  text-center">
      <thead>
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Port</th>
          <th scope="col">SEN Number</th>
          <th scope="col">Status</th>
          <th scope="col">Issue</th>
        </tr>
      </thead>
      <tbody><?php
              require 'connection.php';
              $sql = "SELECT * FROM issues";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_array($result)) {
              ?>

          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['port']; ?></td>
            <td><?php echo $row['sen_number']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['issue']; ?></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer>Made by d3vd3511gn + Ini['oluwa'] + Rildwan for SA&DM</footer>

</html>