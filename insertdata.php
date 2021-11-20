<?php

include 'connection.php'; 

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $degree = $_POST['degree'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $specialization = $_POST['specialization'];

  $insertquery = " insert into registration(name,degree,mobile,email,specialization) values('$name',
                  '$degree','$mobile','$email','$specialization') ";

  $res = mysqli_query($con,$insertquery);

  if($res)
  {
  ?>

  <script>
    alert("Data inserted Successfully");
  </script>

  <?php
  }else{

  ?>

  <script>
    alert("Error");
  </script>

  <?php
  }
  
}

?>