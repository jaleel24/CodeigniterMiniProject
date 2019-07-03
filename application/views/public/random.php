<?php include('header.php');?>
<div class="container">
    <legend>User Registration<legend>
<?php echo form_open('Registration_C/registerUser',array('method'=>'post'));?>
  <fieldset>
    <div class="form-group">
        <label for="exampleInputFirstName">First Name</label>
        <?php echo form_input(array('name'=>'firstname','class'=>'form-control','placeholder'=>'First Name'))?>
    </div>
    <div class="form-group">
        <label for="exampleInputLastName">Last Name</label>
       <?php echo form_input(array('name'=>'lastname','class'=>'form-control','placeholder'=>'Last Names'))?>
    </div>
    <div class="form-group">
        <label for="exampleInputaddress">Address</label>
        <?php echo form_input(array('name'=>'address','class'=>'form-control','placeholder'=>'address')) ?>
    </div>
    <div class="form-group">
        <label for="exampleInputCity">City</label>
        <?php echo form_input(array('name'=>'city','class'=>'form-control','placeholder'=>'city')) ?>
    </div>
    <div class="form-group">
        <label for="exampleInputpostalcode">Postal Code</label>
        <?php echo form_input(array('name'=>'postalcode','class'=>'form-control','placeholder'=>'Postal Code')) ?>
    </div>


  </fieldset>
  <button><?php echo form_submit(array('value'=>'submit','class'=>'btm-btn-primary'));?></button>
<button type="button" class="btn-btn-primary"><a href="<?php echo base_url("Registration_C/fetchUserNumberListController/");?>"style="color:red">Show Number List</a></button>
    <button type="submit" class="btn btn-primary">Register</button>
    <?php echo form_reset(array('value' => 'Reset', 'class'=>"btn btn-primary"));?>

<?php echo form_close();?>
</div>
<?php include('footer.php');?>

<legend>Radio buttons</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
          Option one is this and that—be sure to include why it's great
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="form-check disabled">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
          Option three is disabled
        </label>
      </div>
