<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Join Us</title>

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
		

		<div id="site-content">
			
			<?php include "index_header.php" ?>
			
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Join Us</span>
						</div>

						
                 <?php// include "reg_content.php" ?>
							
							
				 <div ><!-- class="contact-form" -->
 <h1 class="feature-title" align='center' >Registration</h1>
 
  <form action="reg_successful.php" method="post">


  <table align='center' width="50%"  height="100%" >
 <tr><td align='right'>
  Username:</td>
  
 <td> <input type="text" name="uname"></td></tr>

<tr><td align='right'> Password:</td>
   <td><input type="password" name="pwd"></td>
	</tr><tr><td align='right'>Re-enter Password:</td>
    <td>
	
	</tr>
	<tr><td align='right'>Re-enter Password:</td>
    <td><input type="password" name="pwd1"></td>
	
	</tr>
	</div>
	<tr>
<td align='right'>Gender:</td>

<td><input type="radio" name="sex" value="male">Male
    <input type="radio" name="sex" value="female">Female</td>
</tr>
<div class="contact-form">
<tr>
    <td align='right'>Email-id:</td>
	 <td><input type="text" name="email"></td>
</tr>
 <tr><td align='right'> Mobile number:</td>
 <td><input type="text" name="mnumber"></td>
 <tr><td align='right'> Faviorate Hero:</td>
 <td><input type="text" name="heroname"></td></tr>
  <tr><td align='right'> Faviorate Heroin:</td>
 <td><input type="text" name="heroin_name"></td></tr>
<tr><td align="right">Birthday:</td><td>

<select name="day">
<option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>


<select  name="month" ><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>


 <select  name="year" ><option value="0" selected="1">Year</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option></select>
 
 </td></tr>
 
 <tr>
 <tr><td align="right">uplode image:</td> <td><INPUT type='file' name='image' ></td>
</tr>
	 <tr><td></td> <td><input type="submit" value="Submit"></td>
	 </tr>
	</table>
	</form>
</div>


	
	 
	
							
	<?php include "reg_bottom.php" ?>
							
							
							
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			
			<?php include "index_footer.php" ?>
			
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>