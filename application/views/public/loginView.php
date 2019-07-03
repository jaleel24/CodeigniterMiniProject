<?php include('header.php');?>
<div class="container">
  <?php $error=$this->session->flashdata('message');?>
  <div class="row">
    <div class="col-lg-6">
      <div class="alert alert-dismissible alert-success">
      <?php echo $error; ?>
    </div>
    </div>
    </div>
    <legend>User Login<legend>
<?php echo form_open('Registration_C/loginUser',array('method'=>'post'));?>
  <fieldset>
    <div class="form-group">
        <?php echo form_input(array('name'=>'email','class'=>'form-control','placeholder'=>'Enter email','value'=>set_value('email')))?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="col-lg-6">
        <?php echo form_error('email');?>
    </div>
    <div class="form-group">
       <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')))?>
    </div>
    <div class="col-lg-6">
        <?php echo form_error('password');?>
    </div>
  </fieldset>

    <button type="submit" class="btn btn-primary">Login</button>
    <?php echo form_reset(array('value' => 'Reset', 'class'=>"btn btn-primary"));?>

<?php echo form_close();?>
</div>

<?php  include('footer.php')?>
