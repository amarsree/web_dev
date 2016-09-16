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
	<h1 align="center" >Enter your OTP</h1>
	
	
	 <form action="otp_check.php" method="post"  onsubmit='return validate()'>
<table  align="center">		

		<tr> <td><input placeholder='Email' type='text' name='email' id='email'>
	</td></br>
  <tr><td><input placeholder='OTP' type='text' name='otp' id='otp'></td></tr>
  <tr><td><input placeholder='New password' type='password' name='pswd' id='pswd'></td></tr>
  <tr><td><input placeholder='Conform password' type='password' name='pswd1' id='pswd1'></td></tr>
	<tr>
	<td align="center"><button>Update</button></td></tr></table> 
	</form>
	
	
	
	
	
 <script type="text/javascript">
 		
function validate()
 {
 var email = document.getElementById('email').value;
 var pswd = document.getElementById('pswd').value;
 var pswd1 = document.getElementById('pswd1').value;
 
 if(email == "") { alert("Email should not be Empty!"); return false;}
   var atpos = email.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
   alert("In-valid E-mail Address!");
        return false;
      } 
	   if (pswd == "") 
   {
	   alert("Password should not be empty");
    return false;
	}
	 if (pswd1 == "") 
   {
	   alert("Password should not be empty");
    return false;
	}
     if (pswd != pswd1) {
            alert("Passwords Do not match");
		 return false;	
         
        }
	   
   return true;
 }
</script> 
 

  
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