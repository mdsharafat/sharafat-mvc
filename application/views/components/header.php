<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Simlpe MVC Fremework</title>
  <?php linkCss("assets/css/bootstrap.min.css"); ?>
  <?php linkCss("assets/css/style.css"); ?>
  <?php linkCss("assets/css/form.css"); ?>
</head>
<body>
<div class="wrapper">
  <header class="headeroption">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Sharafat MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>/WelcomeController">Home</a>
          </li>
    <?php if(empty(Session::get('user_id'))) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>/RegisterController">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>/LoginController">Login</a>
          </li>

    <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>/MemberController/create">Add Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>/MemberController/index">Manage Member</a>
          </li>

    <?php endif; ?>
      </ul>
    <?php if(!empty(Session::get('user_id'))) : ?>
      <ul class="ml-auto my-2 my-lg-0" style="list-style: none;">
        <li> <a href="<?php echo BASE_URL;?>/LoginController/logout" class="btn btn-success">Logout</a> </li>
      </ul>
    <?php endif; ?>

  </div>
</nav>
  </header>
  <div class="content">