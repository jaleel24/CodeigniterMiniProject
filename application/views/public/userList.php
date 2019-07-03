<?php include('header.php');?>
<h4><center> User data from the database </center></h4>

<table class="table table-hover">
  <thread>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Email ID</th>
      <th scope="col">password</th>
      <th scope="col">Action 1</th>
      <th scope="col">Action 2</th>
    </tr>
  </thread>

<?php foreach($records as $row):?>
    <tr class="table-active">
      <td><?php echo $row->id;?></td>
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->password;?></td>
      <input type="hidden" name="user_id" value="$row->id">
      <td><button type="button" class="btn-btn-primary" ><a href="<?php echo base_url("Registration_C/add_numberbyID/" .$row->id);?>"style="color:red">Add Number</a></button></td>
      <td><button type="button" class="btn-btn-primary"><a href="<?php echo base_url("Registration_C/fetchUserNumberListController/");?>"style="color:red">Show Number List</a></button></td>

    </tr>
<?php endforeach;?>
</table>

<?php include('footer.php');?>
