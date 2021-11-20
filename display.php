
<!DOCTYPE html>
<html>
<head>	
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php'; ?>
</head>
<body>
 <div id="wrapper">
  <h1>Information of Students</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Qualification</span></th>
        <th><span>Mobile Number</span></th>
        <th><span>Email</span></th>
        <th><span>Specialization</span></th>
        <th colspan="2"><span>Operation</span></th>
      </tr>
    </thead>
    <tbody>
    	<?php

    	include 'connection.php';

    	$selectquery = " select * from registration ";

    	$query = mysqli_query($con,$selectquery);

    	while ($res = mysqli_fetch_array($query)) {

    	?>
      <tr>
        <td class="lalign"><?php echo $res['id']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['degree']; ?></td>
        <td><?php echo $res['mobile']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['specialization']; ?></td>
        <td><a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
        <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>

      <?php
  }
  ?>
    </tbody>
  </table>
 </div> 
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
