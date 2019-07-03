
<?php include('public_header.php');


?>

<div class="container">

    <?php echo form_open("RegistrationController/update_usernumber_list/{$user->user_id}", array("method"=>"post", "class"=>"form-horizontal")); ?>
    <fieldset>
      <legend>Edit phone number form</legend>

      <div class="form-group">

        <label for="exampleInputEmail1">User ID</label><br>
        <?php echo form_input(array( 'name' => 'user_id' ,'value'=>set_value('id',$user->user_id))); ?>

        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone Number</label><br>
        <?php echo form_input(array('name' =>'phone_number','placeholder'=>'phone number','value'=>set_value('phone_number',$user->phone_number ?? 'no phone number')))?>
      </div>
            <?php echo form_submit(array( 'value' => 'save','class'=>"btn btn-primary")); ?>
      <a href="<?php echo base_url("RegistrationController/showuser_data"); ?>">Show UserData</a>
    </fieldset>
  <?php echo form_close();?>
</div>

<?php include ('public_footer.php'); ?>
