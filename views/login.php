<?php include 'layouts/header.html';?>

<?php include 'registar.php';?>


<body>
  <div class="mt-5 container text-center w-25 mx-auto">
    <div class="">
      <h1 class="display-5 card-title text-primary fw-bold">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
      <div class="mt-4">
        <form action="../actions/login.php" method="POST">
          <div class="row">
            <div class="col-4">
              <label for="username">User Name</label>
            </div>
            <div class="col-8">
              <input type="text" name="username" id="" class="form-control mb-2" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label for="password">Password</label>
            </div>
            <div class="col-8">
              <input type="password" name="password" id="" class="form-control mb-2" placeholder="">
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100 text-light rounded mt-3" name="btn-login">Log In</button>
          <button type="button" class="btn btn-danger mt-2 w-80 mb-12" data-toggle="modal" data-target="#loginModal">Create an Account</button>
        </form>
      </div>
    </div>
  </div>
<?php include 'layouts/footer.html';?>