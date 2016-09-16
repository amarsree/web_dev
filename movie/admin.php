<?php 
include "acces_check1.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Admin </title>

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
		
		<header class="site-header">
				<div class="container">
					<a href="index1.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">SRKR's Movie Rating</h1>
							<small class="site-description">Rate your faviorate movie</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index1.php">Home</a></li>
							
							<li class="menu-item"><a href="review1.php">Movie reviews</a></li>
							<li class="menu-item"><a href="Profile.php"> <?php 
								if (session_status() == PHP_SESSION_NONE) {
									session_start();
								}
						echo $_SESSION['uname']; ?> </a></li>
					
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							<li class="menu-item"><a href="contact1.php">Contact</a></li>
							<li class="menu-item"><a href="about1.php">About</a></li>
						</ul> <!-- .menu -->

					<!--	<form  class="search-form" name='search' action="" methord='post'>
							<input type="text" name='search'  placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form> -->
					
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
		
		
			
			
		<?php// include "index_header1.php" ?>
			
			<?php// include "index_main.php" ?>
		</div>
		<div claass="contact-form">
			<h1 align="center"> Enter movie deteils...!</h1>
		</div>	
	<div claass="contact-form">	
							<!--------------- form --------------------------->
<form enctype="multipart/form-data"  action="admin_action.php" method="post" onsubmit='return validate()'>	
							<!------------------- table ------------------------->
				<table   align="center" style="width:32%"><h1>
							<!--------------------Movie Name ----------------------------->

			<tr><td align="right"> <strong><h2> Movie Name: </h2></strong></td><td><input type="text" name="mname" id="mname"></td>
			<!--------------------Length ----------------------------->
					<tr><td align="right"><strong><h2>Length:</h2></strong></td>
					<td><input type="text" name="len" id="len" ></td>
					 </tr>
					<!--------------------Premiere ----------------------------->
					<tr><td align="right"><strong><h2>Release date:</h2></strong></td><td>
					

<select name="day" id="day">
<option value="0" selected="1">Day</option>
<option value="01">1</option>
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
<option value="0" selected="1">Month</option>
<option value="01">Jan</option>
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


 <select  name="year" id="year" ><option value="0" selected="1">Year</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option></select>
 </td></tr>
					
					<!--------------------Category ----------------------------->
					<tr>
					<td align="right"><strong><h2>Category:</h2></strong></td>
					<td> <select name="cat" id="cat" placeholder="Choose Category">
													<option value="Action">Action</option>
													<option value="Drama">Drama</option>
													<option value="Fantasy">Fantasy</option>
													<option value="Horror">Horror</option>
													<option value="Adventure">Adventure</option>
												</select><br></td>
												 </tr>
				<!--------------------Rating ----------------------------->
				<tr><td align="right"><strong><h2> Rating:</h2></strong></td>
					<td>
					<INPUT type='radio' name='rating' id='rating'  value="1"> 1

					<INPUT type='radio' name='rating' id='rating' value="2"> 2

					<INPUT type='radio' name='rating' id='rating' value="3"> 3

					<INPUT type='radio' name='rating' id='rating' value="4"> 4

					<INPUT type='radio' name='rating' id='rating' value="5"> 5 <br></td>
					</tr>
					<!--------------------Directors ----------------------------->
					<tr> <td align="right"><strong><h2>Directors:</h2></strong></td>
					<td><input type="text" name="dir" id="dir"><br></td>
					</tr>
					<!--------------------Writers ----------------------------->
					<tr> <td align="right"><strong><h2>Writers:</h2></strong></td>
					<td> <input type="text" name="wri" id="wri"><br></td>
					</td>
					<!--------------------Stars----------------------------->
					<tr><td align="right"><strong><h2>Hero</h2></strong></td>
					<td><input type="text" name="hname" id="hname"><br></td>
					<tr>
					<tr><td align="right"><strong><h2>Heroin</h2></strong></td>
					<td><input type="text" name="hiname" id="hiname"><br></td>
					<tr>
					<!-------------------Story line:----------------------------->
				
					
				<td align="right"><strong><h2>Story line: </h2></strong></td>
					<td><textarea rows="4" cols="50" name="comm" id="comm" width="700px"></textarea><br></td></tr>
					
					
					
			 <!--------------------Uplode image:----------------------------->
					<tr><td align="right"><strong><h2>Uplode image:</h2></strong></td> <td><input type="file" name="file" id="file"></td>
					</tr>
					<tr><td></td>
					<td><input type="submit" value="upload" align="center"></td></tr>

					 </h1></table>
					 
 </form>
 </div>      
 
 <!-- JAVASCRIPT VALIDATION CODE -->
<script type="text/javascript">
 		
function validate()
  {
	var mname = document.getElementById('mname').value;
	//var len = document.getElementById('len').value;	   
    var cat = document.getElementById('cat').value;	   
    var dir = document.getElementById('dir').value;	   
    var wri = document.getElementById('wri').value;	   
    var hname = document.getElementById('hname').value;
	var hiname = document.getElementById('hiname').value;	   
    var comm = document.getElementById('comm').value;	   
  
	
	
    var nm = /^[A-Za-z ]{1,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(mname == "") 
    { 
    alert("Movie Name should not be Empty!");
    return false;
    }	 
    else if(!nm.test(mname)) 
	 { 
      alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
		 
	
	
	
	var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(cat == "") 
    { 
    alert("Category should not be Empty!");
    return false;
    }	 
    else if(!nm.test(cat)) 
	 { 
       alert("Invalid category! category should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
	
	 var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(dir == "") 
    { 
    alert("Director Name should not be Empty!");
    return false;
    }	 
    else if(!nm.test(dir)) 
	 { 
      alert("Invalid Director name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
	
	
	 var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(wri == "") 
    { 
    alert("Writer Name should not be Empty!");
    return false;
    }	 
    else if(!nm.test(wri)) 
	 { 
      alert("Invalid Writer name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
	
	 var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(hname == "") 
    { 
    alert("Hero Name should not be Empty!");
    return false;
    }	 
    else if(!nm.test(hname)) 
	 { 
      alert("Invalid Hero name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
	
	
	 var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(hiname == "") 
    { 
    alert("Heroine Name should not be Empty!");
    return false;
    }	 
    else if(!nm.test(hiname)) 
	 { 
      alert("Invalid Heroine name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
   return false;
     }
	
	 var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 characters 
    if(comm == "") 
    { 
    alert("Story line  should not be Empty!");
    return false;
    }	 
   // else if(!nm.test(comm)) 
	// { 
   //   alert("Invalid story line! it should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
  // return false;
     }
	return true;
  }	

  </script>
 


	
	
	<?php include "index_footer.php" ?>
			
		
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>