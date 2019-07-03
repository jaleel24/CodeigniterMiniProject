
<?php include('public_header.php'); ?>

<div class="container">

    <?php echo form_open('RegistrationController/insert_user_data', array("method"=>"post", "class"=>"form-horizontal")); ?>
    <fieldset>
      <?php $error = $this->session->userdata('username'); ?>
      <div style="width:200px;background:white">
        <?php print_r($error);?>
      </div>
      <legend>User Registraion</legend>

      <div class="form-group">

        <label for="exampleInputEmail1">User Name</label><br>
        <?php echo form_input(array( 'name' => 'u_name')); ?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label><br>
        <?php echo form_input(array('name' =>'email', 'placeholder'=>'Email'))?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label><br>
        <?php echo form_input(array('name' =>'password', 'placeholder'=>'password'))?>
      </div>
      <?php echo form_submit(array( 'value' => 'save','class'=>"btn btn-primary")); ?>
      <a href="<?php echo base_url("RegistrationController/showuser_data"); ?>">Show UserData</a>
    </fieldset>
  <?php echo form_close();?>
</div>

<?php include ('public_footer.php'); ?>
