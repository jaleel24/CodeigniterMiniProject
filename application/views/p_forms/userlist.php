<?php include('public_header.php'); ?>
<h4><center> User data from the database </center></h4>

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col"> User Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">password</th>
      <th scope="col">Action 1</th>
      <th scope="col">Action 2</th>
      <th scope="col">Actiion 3</th>
    </tr>
  </thead>
<?php foreach ($records as $row):?>
    <tr class="table-active">
      <td><?php echo $row->u_name;?></td>
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->password;?></td>
      <input type="hidden" name="user_id" value="$row->id">
      <td><button type="button" class="btn btn-primary"><a href="<?php echo base_url("RegistrationController/Edit_userlist/" .$row->id );?>"style="color:red">Edit</a></button></td>
      <td><button type="button" class="btn btn-primary"><a href="<?php echo base_url("RegistrationController/delete_userlist/" .$row->id );?>"style="color:red">Delete</a></button></td>
      <td><button type="button" class="btn-btn-primary"><a href="<?php echo base_url("RegistrationController/add_number_form/" .$row->id);?>"style="color:red">Add Number</a></button></td>
    </tr>
<?php endforeach;?>

</table>
<?php include ('public_footer.php'); ?>
