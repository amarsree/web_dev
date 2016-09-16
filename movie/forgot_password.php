<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>forgot_password</title>

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
		
		<h2 align="center">Enter mail address which you registered! </h2>
		<table  align="center">
		
		
		
		<tr><td align="center" ><h3> Email-id:<h3></td></tr>
 <form action="login_otp.php" method="post"  onsubmit='return validate()'>
	<tr><td><input type="text" name="email" id='email'></td></tr>
	 
	 <tr align='center'><td ></td>
	 </tr>
	 <tr>
	<td align="center">  <input type="submit"  value="Submit"> </td>
	</tr>
	</form>
	 </table>
<script type="text/javascript">
 		
function validate()
 {
 var email = document.getElementById('email').value;
 
 if(email == "") { alert("Email should not be Empty!"); return false;}
   var atpos = email.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
   alert("In-valid E-mail Address!");
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