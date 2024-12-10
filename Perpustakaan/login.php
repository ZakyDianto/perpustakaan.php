<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<body>
<div class="form-body">
  <div class="row">
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h3>LOGIN</h3>
          <form class="requires-validation" novalidate action="proses_login.php" method="post">

            <div class="col-md-12">
              <input class="form-control" type="text" name="username" placeholder="Username" required>
              <div class="valid-feedback">Username field is valid!</div>
              <div class="invalid-feedback">Username field cannot be blank!</div>
            </div>

            <div class="col-md-12">
              <input class="form-control" type="password" name="password" placeholder="Password" required>
              <div class="valid-feedback">Password field is valid!</div>
              <div class="invalid-feedback">Password field cannot be blank!</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>