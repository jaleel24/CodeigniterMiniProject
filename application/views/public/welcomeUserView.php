<?php include('header.php'); ?>
<div class="container">
      <legend>Logged in</legend>
      <?php
        $error=$this->session->userdata('userObject');
      ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="alert alert-dismissible alert-success">
                <?php echo "welcome :)";?>
            <?php print_r($error->email); ?>
            <td><button type="button" class="btn btn-primary"><a href="<?php echo base_url('Registration_c/showUser_data');?>">Show Data</a></button></td>

          </div>
          </div>
          </div>
<?php include('footer.php'); ?>
