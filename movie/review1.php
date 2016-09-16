<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="aa";
    return;
  //  aleart(';');
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  //alert(str);
  xmlhttp.open("GET","agetuser.php?q="+str,true);
  xmlhttp.send();
}
</script>



	</head>


	<body >
		

		<div id="site-content">
			
			<?php include "index_header1.php" ?>
			
			
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Movie Review</span>
						</div>

						<div class="filters">
						<form >
							<select name="users" onchange="showUser(this.value)">
							<option value="">All</option >
								<option value="Action">Action</option>
								<option value="Drama">Drama</option>
								<option value="Fantasy">Fantasy</option>
								<option value="Horror">Horror</option>
								<option value="Adventure">Adventure</option>
							</select>
						<!--	<select name="year" id="year">
								<option value="#">2014</option>
								<option value="#">2015</option>
								<option value="#">2016</option>
							</select> -->
							</form>
						</div>
			<div class="movie-list">
		<div id="txtHint">
		<?php	include "dbconn.php";
			$rset = mysqli_query($conn, "select * from movies order by time_stamp desc;");
			while($row=mysqli_fetch_assoc($rset))
				{
					$mid=$row['mid']; 
					$mname=$row['mname']; 
				 
									
					echo "<div class='movie'>";
					echo "<figure class='movie-poster'>
					<img src='movies/".$mid.".jpg'"."alt='".$mname."' height=42px width=42px >
					</figure>";
					echo "<div class='movie-title'><a href='single1.php?mid=".$mid."'>".$mname."</a></div>";
					echo "</div>";
					
					}
					?>





		</div>





		<?php	
	/*	$q=0;
		$q = intval($_GET['q']);

		include "dbconn.php";
		echo $q;
			$rset = mysqli_query($conn, "SELECT * FROM `movies` where cat=$q ORDER BY `cat`");
			while($row=mysqli_fetch_assoc($rset))
				{
					$mid=$row['mid']; 
					$mname=$row['mname']; 
				 
									
					echo "<div class='movie'>";
					echo "<figure class='movie-poster'>
					<img src='movies/".$mid.".jpg'"."alt='".$mname."' height=42px width=42px >
					</figure>";
					echo "<div class='movie-title'><a href='single1.php?mid=".$mid."'>".$mname."</a></div>";
					echo "</div>";
					
					}*/


			
					



					?>
					<!--		<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-4.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">The adventure of Tintin</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-5.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Hobbit</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-6.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Exists</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-1.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Drive hard</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-2.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Robocop</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-7.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Life of Pi</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/thumb-8.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">The Colony</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>   -->
						</div>





						<!-- .movie-list -->

				<!--		<div class="pagination">
							<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">4</a>
							<a href="#" class="page-number">5</a>
							<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
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