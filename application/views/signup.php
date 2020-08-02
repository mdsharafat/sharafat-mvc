<?php include "inc/header.php"; ?>

<form action="<?php echo BASE_URL; ?>/UserController/create" method="POST">
      <div class="container">
        <h2 class="text-center">Register</h2>
        <div class="row mt-5">
          <div class="col-md-6">
              <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>
          </div>
          <div class="col-md-6">
              <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
              <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
          </div>
          <div class="col-md-6">
              <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          </div>
        </div>
        <button type="submit" class="btn mt-5">Register</button>
      </div>
</form>

<?php include "inc/footer.php"; ?>