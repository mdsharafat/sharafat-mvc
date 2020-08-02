<?php include "components/header.php"; ?>

<form action="<?php echo BASE_URL; ?>/RegisterController/create" method="POST">
      <div class="container">
        <h2 class="text-center">Register</h2>
        <div class="row mt-5">
          <div class="col-md-6">
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" id="name">
              <div class="error">
                <?php if(!empty($data['name_error'])) : echo $data['name_error']; endif; ?>
              </div>
          </div>
          <div class="col-md-6">
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email">
              <div class="error">
                <?php if(!empty($data['email_error'])) : echo $data['email_error']; endif; ?>
              </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-6">
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" id="password">
              <div class="error">
                <?php if(!empty($data['password_error'])) : echo $data['password_error']; endif; ?>
              </div>
          </div>
          <div class="col-md-6">
              <label for="password-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat">
              <div class="error">
                <?php if(!empty($data['password_repeat_error'])) : echo $data['password_repeat_error']; endif; ?>
              </div>
          </div>
        </div>
        <button type="submit" class="btn mt-5">Register</button>
      </div>
</form>

<?php include "components/footer.php"; ?>