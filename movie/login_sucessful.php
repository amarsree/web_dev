<?php include "acces_check.php" ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>login_sucessful</title>

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
		

		
			
			<?php include "index_header1.php" ?>
			
	<div class="contact-form">

	
	<?Php 
	//	$uname=$_POST['uname'];
//		$pswd=$_POST['pswd'];
//		$sex=$_POST['sex'];
//		$email=$_POST['email'];
//		$mno=$_POST['mno'];
//		$hname=$_POST['hname'];
//		$hiname=$_POST['hiname'];
//		$day=$_POST['day'];
//		$month=$_POST['month'];
//		$year=$_POST['year'];
//		$dob=$year."-".$month."-".$day; 


//if ($uname=="admin") {
//	header("Location: admin.php");
 
//}


/*	

include "dbconn.php";



$rset = mysqli_query ($conn, "SELECT * FROM registration;");
 


			while($row=mysqli_fetch_assoc($rset))
			{
			echo "first name :" .$row['uname']."<BR>";
			echo "password :" .$row['pswd']."<BR>";
			echo "gender :" .$row['sex']."<BR>";
			echo "email :" .$row['email']."<BR>";
			echo "mno :" .$row['mno']."<BR>";
			echo "hero :" .$row['hname']."<BR>";
			echo "heroin:" .$row['hiname']."<BR>";
			echo "dob :" .$row['dob']."<BR>";
			echo "<hr>";
			} 
*/
		?>  
		
		
		

		
		<h1 align="center">LOGGED  in successful </h1>
		<h1 align="center">welcome <?php echo $_SESSION['uname']; ?></h1>

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