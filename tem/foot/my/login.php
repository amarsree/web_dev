<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >

<?php  include 'header.php'; ?>


<!-- <table border="1" align="center" width="45%">
    
   <tr><th><h3 class="panel-title">Login via site</h3></th></tr>
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
		    	<tr><td><input class="form-control" placeholder="yourmail@example.com" name="email" type="text"></td></tr>
			<tr><td><input class="form-control" placeholder="Password" name="password" type="password" value=""></td></tr>
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
		</table> -->


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
	<td align="center">
<button type="button" class="btn btn-primary">Login</button></td>
	</tr>

  </table >
  </center> 
 

  <table align="center" width="35%">
   <tr><td align="left"> <a href="forgot_password.php">Forgot Password?</a></td>
   <td align="left"> <a href="admin_login.php">admin login</a></td>

	<td align="right"><a href="joinus.php">sign-up</a>
	</td>
	</tr>
	</table>

   
<?php  include 'footer.php'; ?>

</body>
</html>
