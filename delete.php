<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = " delete from registration where id=$id ";

$querydel = mysqli_query($con, $deletequery);

if($querydel){
?>

<script>
	alert("Deleted Successfully");
</script>

<?php

}else{
	?>

	<script>
		alert("Error");
	</script>

	<?php
}

header('location:display.php');

?>
