<?php include('public_header.php'); ?>

<fieldset>
  <legend >Unauthorized User</legend>
  <?php
  $error = $this->session->userdata('username');
    ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger", align="center">
          <?php echo"<pre>" ?>
            <?php echo "unauthorized user sorry you cannot login ";?>
      </div>
      </div>
      </div>

<?php include('public_footer.php'); ?>
