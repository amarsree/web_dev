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
			 
				 
				 <!---------------Registration------------------->
 <h1 class="feature-title" align='center' >Registration</h1>
					<!---------------Registration-------------------->
  <form action="reg_successful.php" enctype="multipart/form-data" method="post"  onsubmit='return validate()'>


  <table align='center' width="50%"  height="100%" >
 <tr><td align='right'>Username:</td><td> <input type="text" name="uname" id="uname"></td></tr>

<tr><td align='right'> Password:</td><td><input type="password" name="pswd" id="pswd"></td>
	</tr>
	<tr><td align='right'>Re-enter Password:</td>
    <td><input type="password" name="pswd1" id="pswd1"></td>
	
	</tr>
	</div>
	<tr>
<td align='right'>Gender:</td>

<td><input type="radio" name="sex" id="sex" value="male" checked>Male
    <input type="radio" name="sex" id="sex" value="female">Female</td>
</tr>
<div class="contact-form">
<tr>
    <td align='right'>Email-id:</td>
	<td><input type="text" name="email" id="email"></td>
</tr>
 <tr><td align='right'> Mobile number:</td>
 <td><input type="text" name="mno" id="mno"></td>
 <tr><td align='right'> Faviorate Hero:</td>
 
 <td><input type="text" name="hname" id="hname"></td></tr>
  <tr><td align='right'> Faviorate Heroin:</td><td><input type="text" name="hiname" id="hiname"></td></tr>
 </div>
 <div >
<tr><td align="right">Birthday:</td><td>

<select name="day" id="day">
<option value="01" selected="1">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>


<select  name="month" id="month" >
<option value="01" selected="1">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sept</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>


 <select  name="year" id="year" >
 <option value="2000" selected='1'>2000</option>
 <option value="1999">1999</option>
 <option value="1998">1998</option>
 <option value="1997">1997</option>
 <option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option>
 <option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>
 </select>
 </td></tr>
</div> 
 <tr>
 <tr><td></td>
 <td>
<input type="file" name="file" id="file">

</td></tr>
	 <tr><td></td> <td><input type="submit" value="Submit"></td>
	 
	 </tr>
	</table>
	</form>
	
					
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
		
	<!-- JAVASCRIPT VALIDATION CODE -->
<!-- JAVASCRIPT VALIDATION CODE -->
<script type="text/javascript">
 		
function validate()
 {
   //Get Form Field Values to Variables
  
   var uname = document.getElementById('uname').value;	
   var pswd = document.getElementById("pswd").value;
   var pswd1 = document.getElementById("pswd1").value;   
   var email = document.getElementById('email').value;	
   var mno = document.getElementById('mno').value;	      
   var file = document.getElementById('file').value;	      
      

  
  // Validate Name - Empty Check & Only Characters Check
   if(uname == "") { 
   alert("Name should not be Empty!");
   return false;}
   var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!nm.test(uname)) { alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); return false;}
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
     
    //Validate Email - Empty Check & Email Format Check
   if(email == "") { alert("Email should not be Empty!"); return false;}
   var atpos = email.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
      {
   alert("In-valid E-mail Address!");
        return false;
      }

   
    //Validate Mobile - Empty Check & Mobile Format Check
   if(mno == "") { alert("Mobile number  should not be Empty!"); return false;}
   var mb = /^[0-9]{10}$/; //Regular Expression to match a value with exactly 10 digits 
  if(!mb.test(mno)) { alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number"); return false;}
  
    if(file == "")
		{
		alert(" should not be Empty!");
		return false;
		}
	   
   
   return true;
   
   
  
   
 
}
</script> 

		
	</body>

</html>