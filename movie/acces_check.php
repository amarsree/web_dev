<?php
session_start();
if(isset($_POST['email']) && isset($_POST['pswd']))
{			
			$email=$_POST['email'];
			$pswd=$_POST['pswd'];
	//	if ((email=='admin') && (pswd=='123'))
	//	{
	//		header('location: login.php?id=0');
	//	}			
			
			
			include "dbconn.php";
			$rset = mysqli_query($conn, "select uname,pswd,email from registration where email='$email' and pswd='$pswd';"); 
			$rows =mysqli_num_rows($rset);
				if($rows==0)
						{
								session_destroy();
								header('location: login.php?id=0');
						}
								else
								{
									$row=mysqli_fetch_assoc($rset);
									$_SESSION['uname']=$row['uname'];
									$_SESSION['email']=$row['email'];	
 
								}
}	
		else if(!isset($_SESSION['email']))
{
			session_destroy();
		header ('location: login.php?id=1'); 
} 
?>