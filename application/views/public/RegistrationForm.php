<?php include('header.php');?>
<div class="container">
    <legend>User Registration<legend>
<?php echo form_open('Registration_C/registerUser',array('method'=>'post'));?>
  <fieldset>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <?php echo form_input(array('name'=>'email','class'=>'form-control','placeholder'=>'Enter email','value'=>set_value('email')))?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="col-lg-6">
        <?php echo form_error('email');?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
       <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')))?>
    </div>
    <div class="col-lg-6">
        <?php echo form_error('password');?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Confirm Password</label>
        <?php echo form_input(array('name'=>'passconf','type'=>'password','class'=>'form-control','placeholder'=>'Confirm Password','value'=>set_value('passconf'))) ?>
    </div>
    <div class="col-lg-6">
        <?php echo form_error('passconf');?>
    </div>
  </fieldset>

    <button type="submit" class="btn btn-primary">Register</button>
    <?php echo form_reset(array('value' => 'Reset', 'class'=>"btn btn-primary"));?>

<?php echo form_close();?>
</div>
<?php include('footer.php');?>
