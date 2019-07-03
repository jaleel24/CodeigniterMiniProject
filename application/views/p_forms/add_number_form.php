<?php include('public_header.php'); ?>

<div class="container">
    <?php echo form_open('RegistrationController/insert_numbers', array("method"=>"post", "class"=>"form-horizontal")); ?>
    <input type="text" name="user_id" value="<?php echo $user_id; ?>" >

    <fieldset>
      <legend>Add Phone Numbers</legend>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone Number</label><br>
        <?php echo form_input(array('name' =>'phone_number', 'placeholder'=>'phone number'))?>
      </div>
      <div class="form-group">

        <?php echo form_submit(array( 'value' => 'submit','class'=>"btn btn-primary")); ?>

        <button type="button" class="btn btn-primary"><a href="<?php echo base_url("RegistrationController/showuser_numbers/");?>"style="color:red">Show Numbers List</a></button>

      </div>

  <?php echo form_close();?>
</div>

<?php include ('public_footer.php'); ?>
