<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RIMS Issue Login - NPA</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="form__container container-sm p-3">
    <h6 class="display-6 form__header mx-auto">Login - RIMS Issues</h6>

    <form action="login-process.php" method="post" class="form__body">
      <!-- Username -->
      <label for="username" class="form-label label username--label" id="username">Email:
      </label>
      <input type="email" name="username" id="username" class="username--field form-control mb-1" required />
      <p class="text-start text-danger mb-3">
        <i>Wrong  Username or Password</i>
      </p>
      <!-- Password -->
      <label for="password" class="form-label label password--label" id="password">Password:</label>
      <input type="password" name="password" id="password" class="password--field form-control mb-1" required />
      <p class="text-start text-danger mb-3">
        <i>Wrong  Username or Password</i>
      </p>

      <!-- New User - Sign Up -->
      <p class="text-start">
        <a href="signup.php" class="link-dark text-center">New User? Signup Here!</a>
      </p>

      <!-- Login Button -->
      <input class="btn btn-success btn-lg form-control mt-4 " type="submit" name="submit" value="Login" />
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer>Made by d3vd3511gn + Ini['oluwa'] + Rildwan for SA&DM</footer>

</html>