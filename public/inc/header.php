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
    <!-- <h2>Simlpe MVC Fremework</h2> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Sharafat MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL;?>/RegisterController">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL;?>/LoginController">Login</a>
      </li>
    </ul>
  </div>
</nav>
  </header>
  <div class="content">