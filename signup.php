<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RIMS Issue Signup - NPA</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="form__container container-sm p-3">
      <h6 class="display-6 form__header mx-auto">Sign Up - RIMS Issues</h6>
      <form action="signup-process.php" method="post" class="form__body">
        <!-- Username -->
        <label for="username" class="form-label label username--label mt-3"
          >Email:
        </label>
        <input
          type="email"
          name="username"
          id=""
          class="username--field form-control"
          required
        />

        <!-- Password -->
        <label for="password" class="form-label label password--label mt-3"
          >Password:</label
        >
        <input
          type="password"
          name="password"
          id=""
          class="password--field form-control"
          required
        />

        <!-- Port -->
        <label for="port" class="form-label label port--label mt-3"
          >Port:</label
        >
        <select
          name="port"
          id="port"
          class="form-select form-select port--dropdown mb-3"
          required
        >
          <option value="">Select Port</option>
          <option value="NPA HQ" id="port">NPA HQ, Marina</option>
          <option value="Lagos Port" id="port">Lagos Port</option>
          <option value="Tin-Can Port" id="port">Tin-Can Port</option>
          <option value="Rivers Port" id="port">Rivers Port</option>
          <option value="Onne Port" id="port">Onne Port</option>
          <option value="Delta Port" id="port">Delta Port</option>
          <option value="Calabar Port" id="port">Calabar Port</option>
        </select>

        <!-- New User - Sign Up -->
        <p class="text-start">
          <a href="index.php" class="link-dark text-center"
            >Have an Account? Login Here!</a
          >
        </p>

        <!-- Submit Button -->
        <input
          class="btn btn-success btn-lg form-control mt-4 "
          type="submit"
          name="submit"
          value="Sign Up"
        />
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
  <footer>Made by d3vd3511gn + Ini['oluwa'] + Rildwan for SA&DM</footer>
</html>