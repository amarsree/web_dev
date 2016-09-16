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
			
	<div class="contact-form">
	<h1 align="center" >Enter your details...!</h1>
		<form action="login_sucessful.php" method="post">
<table  align="center">		

		<tr> <td><input placeholder='email' type='text' name='email' id='email'>
	</td></br>
  <tr> <td> <input placeholder='Password' type='password' name='pswd' id='pswd'></td>
	</tr>
	<tr><td align="center"><font color="orange">
<?php
  if(isset($_GET['id']))
	{
	echo "Please check your Email & Password";	
	}
	

	
?></font> </td>
</tr>
	
	<tr>
	<td align="center"><button>LOGIN</button></td>
	</tr>

 
  
  </table >
  </center> 
 

  <table align="center" width="25%">
   <tr><td align="left"> <a href="forgot_password.php">Forgot Password?</a></td>
   <td align="left"> <a href="admin_login.php">admin login</a></td>

	<td align="right"><a href="joinus.php">sign-up</a>
	</td>
	</tr>
	</table>
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