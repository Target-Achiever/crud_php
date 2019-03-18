<?php
$con = mysqli_connect("localhost","root","","crud");


$sql=mysqli_query($con,"select * from  resgister");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  

<div style="
    margin-right: 33% !important;
    margin-left: 39%;
">
<a href='insert.php'> <button class="btn btn-default">Add Data</button></a>
</div>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            	<th>S.No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
               <th>Action</th>
            </tr>
        </thead>
        <tbody>
         
<?php
$r=1;
while($row = mysqli_fetch_assoc($sql)) {
?>
  <tr>
  	<td><?php echo $r?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><a href='update.php?id=<?php echo $row['id']?>'><button class="btn btn-default">Update</button></a><a href='delete.php?id=<?php echo $row['id']?>' onclick="return confirm('Are you sure to delete?')"><button class="btn btn-default">Delete</button></a></td>
            </tr>

<?php
$r++;
}
?>


</tbody>
</table>


<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );

</script>