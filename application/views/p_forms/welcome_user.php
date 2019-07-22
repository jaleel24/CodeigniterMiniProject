<?php include('public_header.php'); ?>
<div class="container">


    <fieldset>
      <legend>Login</legend>
      <?php
      $error = $this->session->userdata('username','email');

        ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
              <?php echo"<pre>" ?>
                <?php echo "Welcome User:)";?>
            <?php print_r($error); ?>
          </div>
          </div>
          </div>

<?php include('public_footer.php'); ?>
