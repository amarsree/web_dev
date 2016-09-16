<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Registered sucessful</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		
			
			<?php include "index_header.php" ?>
			
			
	
			
	<div class="contact-form">	
 <h1 align="center">Registered successfully....! </h1>
		<?php 
		
		$uname=$_POST['uname'];
		$pswd=$_POST['pswd'];
		$sex=$_POST['sex'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$hname=$_POST['hname'];
		$hiname=$_POST['hiname'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$dob=$year."-".$month."-".$day;
		
		
		 
		include "dbconn.php";
		//$conn = mysqli_connect("localhost","mini_user","pass@123","movie_rating");
		//echo "insert into registration (uname,pswd,sex,email,mno,hname,hiname,dob) values('$uname','$pswd','$sex','$email','$mno','$hname','$hiname','$dob')"; 
		mysqli_query($conn,"insert into registration (uname,pswd,sex,email,mno,hname,hiname,dob) values('$uname','$pswd','$sex','$email','$mno','$hname','$hiname','$dob')"); 
		
		 ?>
<?php

class fileing 
{
  function upload()
    {
	$email=$_POST['email'];
      $name = $_FILES['file']['name'];
      $type = $_FILES['file']['type'];
      $tmp = $_FILES['file']['tmp_name'];
      $size = $_FILES['file']['size'];

      $dir = "uploads/"; //Create a folder named "uploads" and give write permission (chmod 777 uploads)
      $filepath = "uploads/".$email.".jpg";

      //echo $type."<br>".$size."<br>".$filepath;
      $validsize = 1000000; //Change this number to increase or decrease the file size limit
    
      if($size <= $validsize) 
        {
          if(move_uploaded_file($tmp, $filepath))
            {
              // echo "$name is uploaded into $dir";
            }
          else
            {
               echo " Not uploaded";
            }
        }
      else
        {
          echo "File size has to be less than $validsize";
        }
  } 
}

if(isset($_FILES['file'])) 
  {
    $fu = new fileing;
    $fu->upload();
  }

?>	
		

		
		

   </div>
			<?php //include "index_main.php" ?>
			
			
			
			<?php include "index_footer.php" ?>
			
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>