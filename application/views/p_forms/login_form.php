
<?php include('public_header.php'); ?>

<div class="container">

    <?php echo form_open('RegistrationController/login_user', array("method"=>"post", "class"=>"form-horizontal")); ?>
    <fieldset>
      <legend>Login</legend>
      <?php
      $error = $this->session->flashdata('message');
        ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
            <?php echo $error; ?>
          </div>
          </div>
          </div>


  <div class="form-group">
        <label for="exampleInputEmail1">User Name</label><br>
        <?php echo form_input(array( 'name' => 'username', 'placeholder'=>'user name', 'value'=>set_value('username'))); ?>
      </div>
      <div class="col-lg-6">
          <?php echo form_error('username');?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label><br>
        <?php echo form_input(array('name' =>'email', 'placeholder'=>'Email', 'value'=>set_value('email')))?>
      </div>
      <div class="col-lg-6">
          <?php echo form_error('email');?>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label><br>
        <?php echo form_password(array('name' =>'password', 'placeholder'=>'password'))?>
      </div>
      <div class="col-lg-6">
          <?php echo form_error('password');?>
      </div>

      <?php echo form_submit(array( 'value' => 'Login','class'=>"btn btn-primary")); ?>
      <?php echo form_reset(array('value' => 'Reset', 'class'=>"btn btn-primary"));?>

    </fieldset>
  <?php echo form_close();?>
</div>

<?php include ('public_footer.php'); ?>
