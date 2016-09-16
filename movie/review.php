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


		</head>


		<body>
			

			<div id="site-content">
				
				<?php include "index_header.php" ?>
				
				<main class="main-content">
					<div class="container">
						<div class="page">
							<div class="breadcrumbs">
								<a href="index.php">Home</a>
								<span>Movie Review</span>
							</div>

						<!--	<div class="filters">
							<form action="" method="post">
								<select name="cat" id="cat" placeholder="Choose Category">
									<option value="#">Action</option>
									<option value="#">Drama</option>
									<option value="#">Fantasy</option>
									<option value="#">Horror</option>
									<option value="#">Adventure</option>
								</select>
								<select name="year" id="year">
									<option value="#">2014</option>
									<option value="#">2015</option>
									<option value="#">2016</option>
								</select>
								</form>
							</div--!>
				<div class="movie-list">
			<?php	
			    $pid=$_GET['pid'];
				include "dbconn.php";
				$pno=$pid*8;
				
				$rset = mysqli_query($conn, "SELECT * FROM movies  ORDER BY mid LIMIT 8 OFFSET $pno;");
				
				while($row=mysqli_fetch_assoc($rset))
					{
						$mid=$row['mid']; 
						$mname=$row['mname']; 
					 
										
						echo "<div class='movie'>";
						echo "<figure class='movie-poster'><img src='movies/".$mid.".jpg' alt=''></figure>";
						echo "<div class='movie-title'><a href='single.php?mid=$mid'>$mname</a></div>";
						echo "</div>";
						
						}
						
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

							<div class="pagination">
							<!--	<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span> -->

							<?php

								// $rset = mysqli_query($conn, "select max(mid) as mx from movies");
		 // $row=mysqli_fetch_array($rset);
		// $row=mysqli_fetch_array($rset);
		// $mid=$row['mx'];
	  //   echo $mid;


							$rset = mysqli_query($conn, "SELECT count(mid) as total FROM movies;");
							$row=mysqli_fetch_assoc($rset);
							$total=$row['total']; 
								//$t=$total/8;
							$total=300;
							$t=ceil($total/8);
						
							$start= floor($pid/5)*5;
						
							$end=$t-$start;
							//function pnum($start $end)
						
							//  $t1=floor($t);
								//  echo $t1;
	function name($start,$end)
	{
	for ($i = $start; $i < $start+$end; $i++)
							{
								$n=$i+1;
								if($i==$pid)
								{
									echo '<span class="page-number current">'.$n.'</span>';
								}
								else
								{

									echo '<a href="review.php?pid='.$i.'"class="page-number">'.$n.'</a>';
								}

							}	
	}

	if($pid!=0){
								if($start>0){
									echo '<a href="review.php?pid='.($pid-5).'" class="page-number next"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> </a>';
								}
								echo '<a href="review.php?pid='.($pid-1).'" class="page-number next"><i class="fa fa-angle-left"></i></a>';

							}
	if($end<5){
		
							
	name($start,$end);



						//echo $pid.'pid';
						//		echo $t;
							if(!($pid>$t-2)){
								echo '<a href="review.php?pid='.($pid+1).'" class="page-number next"><i class="fa fa-angle-right"></i></a>';
							}

	}else{
		for ($i = $start; $i < $start+5; $i++)
							{
								$n=$i+1;
								if($i==$pid)
								{
									echo '<span class="page-number current">'.$n.'</span>';
								}
								else
								{

									echo '<a href="review.php?pid='.$i.'"class="page-number">'.$n.'</a>';
								}

							}
						//echo $pid.'pid';
						//		echo $t;
							if(!($pid>$t-2)){
								echo '<a href="review.php?pid='.($pid+1).'" class="page-number next"><i class="fa fa-angle-right"></i></a>';
								echo '<a href="review.php?pid='.($pid+5).'" class="page-number next"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>';
							}
	}

							?>



								<!-- <a href="review.php?pid=2" class="page-number">3</a>
								<a href="review.php?pid=3" class="page-number">4</a>
								<a href="review.php?pid=4" class="page-number">5</a> 
								<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>   -->
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