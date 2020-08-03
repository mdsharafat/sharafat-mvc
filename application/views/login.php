<?php include "components/header.php"; ?>

<?php
  if(!empty(Session::get('registration_message'))){
    Session::flash('registration_message', 'alert alert-success');
  }
?>

<form action="<?php echo BASE_URL; ?>/LoginController/login" method="POST">
      <div class="container">
        <h2 class="text-center">Login</h2>
        <div class="row mt-5">
          <div class="col-md-6">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                <div class="error">
                  <?php if(!empty($data['email_error'])) : echo $data['email_error']; endif; ?>
                </div>
          </div>
          <div class="col-md-6">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="psw">
                <div class="error">
                  <?php if(!empty($data['password_error'])) : echo $data['password_error']; endif; ?>
                </div>
          </div>
        </div>
        <button type="submit" class="btn mt-5">Login</button>
      </div>
</form>
<?php include "components/footer.php"; ?>