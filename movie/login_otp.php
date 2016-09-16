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
	$otp=rand(999,10000);
	//echo $otp;
  require_once('email/class.phpmailer.php');
  include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "movierating11@gmail.com";  // GMAIL username
  $mail->Password   = "srkr@123";            // GMAIL password

  $mail->SetFrom('movierating11@gmail.com', 'movie rating'); // Change the name as you want
  $mail->Subject    = "conformation mail";
  $mail->Body = "Hear is the otp ".$otp."\n go to this link for typing otp http://www.srkrcampus.net/miniproject8/login_otp1.php";
  
  $mail->AddAddress($email);

  $mail->Send();
  
 include 'dbconn.php';
  $rset = mysqli_query($conn, "select email,status,otp from forgot_pswd where email='$email' and status=0;"); 
			$rows =mysqli_num_rows($rset);
				if($rows==0)
				{
					include "dbconn.php";
  mysqli_query($conn,"insert into forgot_pswd (email,otp,status) values('$email',$otp,0)"); 
  echo "<br><br><center><font color='green' size='3'><b> OPT has been Successfully Sent to your email!</b></font></center>";

				}
				else
				{
					$row=mysqli_fetch_assoc($rset);
					echo "<center>A record is matching with your details you can use this OTP ".$row['otp']."</center>";
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