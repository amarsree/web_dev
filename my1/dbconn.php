<?php
$conn = mysqli_connect("localhost","mini_user","pass@123","attendence");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>