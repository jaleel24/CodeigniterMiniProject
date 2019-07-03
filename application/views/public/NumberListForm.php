<?php include('header.php');?>
<h4><center> User data from the database </center></h4>

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action 1</th>
    </tr>
  </thead>
<?php foreach ($records as $row):?>
    <tr class="table-active">
      <td><?php echo $row->id;?></td>
      <td><?php echo $row->user_id;?></td>
      <td><?php echo $row->phone_number;?></td>
      <input type="hidden" name="user_id" value="$row->id">
      <td><button type="button" class="btn-btn-primary"><a href="<?php echo base_url("Registration_C/add_numberbyID/" .$row->id);?>"style="color:red">Add Number</a></button></td>
    </tr>
<?php endforeach;?>

</table>

<?php include('footer.php');?>
