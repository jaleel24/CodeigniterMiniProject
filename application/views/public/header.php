<!Doctype HTML>
<html>
<head>
    <title>Registration</title>
    <?php echo link_tag('assets/bootstrap.min.css')?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url('Registration_C');?>">MyWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Registration_C')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Registration_C')?>">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Registration_C/loginView')?>">Login</a>
      </li>
    </ul>

      <?php
      $isLogedin = $this->session->logged_in;
      if($isLogedin === TRUE){
          ?>
        <button class="btn btn-outline-secondary" type="submit"><a class="nav-link" href="<?php echo base_url('Registration_C/logoutUser')?>">Logout</a></button>
        <?php
}
?>


  </div>
</nav>
