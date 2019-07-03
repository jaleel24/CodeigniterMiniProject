<?php include('public_header.php');?>
<h4>Display Numbers</h4>
<table class="table table-hover">

  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col"> User ID</th>
      <th scope="col"> Phone Numbers</th>
      <th scope="col"> Action 1</th>
      <th scope="col"> Action 2</th>
  </tr>
</thread>
  <?php echo form_open('Registration_Controller/showuser_numbers', array("method"=>"post", "class"=>"form-horizontal")) ?>
  <?php  foreach($records as $row):?>
    <tr>
      <td><?php echo $row->id;?></td>
      <td><?php echo $row->user_id;?></td>
      <td><?php echo $row->phone_number;?></td>
      <td><button type="button" class="btn btn-primary"><a href="<?php echo base_url("RegistrationController/edit_usernumber/" .$row->id );?>"style="color:red">Edit</a></button></td>
      <td><button type="button" class="btn btn-primary"><a href="<?php echo base_url("RegistrationController/delete_usernumber/" .$row->id );?>"style="color:red">Delete</a></button></td>

    </tr>
  <?php endforeach;?>
</table>
<div>
  <?php echo form_close()?>
</div>
<?php include('public_footer.php');?>
