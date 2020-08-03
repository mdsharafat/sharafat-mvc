<?php include "components/header.php"; ?>

<h1 class="text-center text-success">Add Member</h1>

<form action="<?php echo BASE_URL; ?>/MemberController/store" method="POST">
      <div class="container">
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
              <label for="age"><b>Age</b></label>
              <input type="number" placeholder="Enter Age" name="age" id="age">
              <div class="error">
                <?php if(!empty($data['age_error'])) : echo $data['age_error']; endif; ?>
              </div>
          </div>
          <div class="col-md-6">
              <label for="city"><b>City</b></label>
              <input type="text" placeholder="Enter City" name="city" id="city">
              <div class="error">
                <?php if(!empty($data['city_error'])) : echo $data['city_error']; endif; ?>
              </div>
          </div>
        </div>


        <button type="submit" class="btn mt-5">Add Member</button>
      </div>
</form>

<?php include "components/footer.php"; ?>