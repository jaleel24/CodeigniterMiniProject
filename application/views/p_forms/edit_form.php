
<?php include('public_header.php');


?>

<div class="container">

    <?php echo form_open("RegistrationController/update_user_data/{$user->id}", array("method"=>"post", "class"=>"form-horizontal")); ?>
    <fieldset>
      <legend>Edit Registration form</legend>

      <div class="form-group">

        <label for="exampleInputEmail1">User Name</label><br>
        <?php echo form_input(array( 'name' => 'u_name' ,'value'=>set_value('u_name',$user->u_name))); ?>

        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label><br>
        <?php echo form_input(array('name' =>'email', 'placeholder'=>'Email','value'=>set_value('email',$user->email ?? 'no emzil')))?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label><br>
        <?php echo form_input(array('name' =>'password', 'placeholder'=>'password','value'=>set_value('password',$user->password ?? 'no password')))?>
      </div>
      <?php echo form_submit(array( 'value' => 'save','class'=>"btn btn-primary")); ?>
      <a href="<?php echo base_url("RegistrationController/showuser_data"); ?>">Show UserData</a>
    </fieldset>
  <?php echo form_close();?>
</div>

<?php include ('public_footer.php'); ?>
