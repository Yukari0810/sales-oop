<div class="modal fade modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog w-80">
    <div class="modal-content">
      <button type="button" class="btn btn-default text-end text-secondary" data-dismiss="modal" id="close_btn"><i class="fa-solid fa-x"></i></button>
      <div class="modal-body w-80 mx-auto">
        <form action="../actions/registar.php" method="POST">
          <h1 class="display-5 fw-bold text-danger text-center" id="myModalLabel"><i class="fa-solid fa-user-plus"></i> Registration</h1>
          <div class="mt-4 row mb-3">
            <div class="col">
              <label for="first_name" class="form-label text-start">First Name</label>
              <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="col">
              <label for="last_name" class="form-label text-start">Last Name</label>
              <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-danger w-100 mb-5">Registar</button>
        </form>
      </div>
    </div>
  </div>
</div>