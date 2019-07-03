<?php include('header.php');?>
<div class="container">
  <legend>Add Contact Number</legend>
  <?php echo form_open('Registration_C/add_number_controller',array("method"=>"post","class"=>"form-horizontal"));?>
    <fieldset>
      <div class="form-group">
          <label for="exampleInputFirstName">First Name</label>
          <?php echo form_input(array('name'=>'firstname','class'=>'form-control','placeholder'=>'First Name'))?>
      </div>
      <div class="form-group">
          <label for="exampleInputLastName">Last Name</label>
         <?php echo form_input(array('name'=>'lastname','class'=>'form-control','placeholder'=>'Last Names'))?>
      </div>
      <div class="form-check">
        <Legend>Gender</Legend>
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="gender" value="man" checked="">
                    Male
        </label>
        </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="gender" value="female">
                    Female
        </label>
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
      <div class="form-group">
          <label for="exampleInputpostalcode">User Id</label>
        <input type="text" class="form-control" name="user_id" value="<?php echo $user_id; ?>" >
      </div>
      <div class="form-group">
          <label for="exampleInputpostalcode">Phone Number</label>
          <?php echo form_input(array('name'=>'phone_number','class'=>'form-control','placeholder'=>'Phone Number')) ?>
      </div>
      <div class="form-check">
          <Legend>Type</Legend>
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked="">
                 Work
          </label>
            </div>
      <div class="form-check disabled">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="HOME" enabled="">
                  Home
          </label>
      </div>
      <div class="form-check disabled">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="friend" enabled="">
                  Friend
          </label>
      </div>
      <div class="form-check disabled">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="colleague" enabled="">
                  Colleague
          </label>
      </div>
      </fieldset>
      <div class="container" >
      <button type="submit" class="btn btn-primary">Submit</button>
      <?php echo form_reset(array('value' => 'Reset', 'class'=>"btn btn-primary"));?>
    </div>

<?php include('footer.php');?>
