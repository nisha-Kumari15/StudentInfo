<?php


$username = "root";
$password = "";
$server = 'localhost';
$db = "project";

$con = mysqli_connect($server,$username,$password,$db);

if($con){

	?>

	<script>
		alert("Connection Successful");
	</script>

	<?php

}else{
	echo "No Connection";
}


?>