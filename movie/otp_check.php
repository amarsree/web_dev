<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

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
			
	
	<?php
	$email=$_POST['email'];
	$otp=$_POST['otp'];
	$pswd=$_POST['pswd'];
//	echo $email;
//	echo $otp;
//	echo $pswd;
	
	 include 'dbconn.php';
	 $rset = mysqli_query($conn, "select email,otp,status from forgot_pswd where email='$email' and otp='$otp';"); 
			$rows =mysqli_num_rows($rset);
				if($rows==0)
				{
					echo "no rows";
				}
				else
					{
					$row=mysqli_fetch_assoc($rset);
					 include 'dbconn.php';
				//	echo $row['status'];
							if (0==$row['status'])
					 	{		include 'dbconn.php';
								 $rset = mysqli_query($conn, "UPDATE registration  SET pswd='$pswd' WHERE email='$email';");
								$rset = mysqli_query($conn, "UPDATE forgot_pswd  SET status='1' WHERE email='$email';");
								echo '<center>your password has been changed</center>'; 
							}			
							else{
								echo "<h1><center>link experied</center></h1>";
							}  
				
			}
	
	?>
	
<?php //include "index_main.php" ?>
			
			
			
			<?php include "index_footer.php" ?>
			
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>