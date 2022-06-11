<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RIMS Issue Form - NPA</title>
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
      <h6 class="display-6 form__header mx-auto">Form - RIMS Issues</h6>
      <form action="form-process.php" method="post" class="form__body">
        <!-- Port -->
        <label for="port" class="form-label label port--label mt-3" id="port"
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

        <!-- SEN No -->
        <label for="sen-number" class="form-label label sen-number--label mt-3" id="sen-number"
          >SEN No:</label
        >
        <input
          type="text"
          name="sen-number"
          id="sen-number"
          class="sen-number--field form-control"
          required
        />

        <!-- Status -->
        <label for="status" class="form-label label status--label mt-3" id="status"
          >Status:</label
        >

        <select
          name="status"
          id="status"
          class="form-select form-select port--dropdown"
          required
        >
          <option value="">Select Status</option>
          <option value="Pending" id="status">Pending</option>
          <option value="Resolved" id="status">Resolved</option>
        </select>

        <!-- Issue -->
        <label for="issue" class="form-label label issue--label mt-3" id="issue"
          >Issue:</label
        >
        <textarea
          name="issue"
          class="form-control"
          id="issue"
          rows="4"
          wrap="hard"
          required
        ></textarea>

        <!-- Submit Button -->
        <input
          class="btn btn-success btn-lg form-control mt-4 "
          type="submit"
          name="submit"
          value="Submit"
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
