<main class="main-content">
<div class="container">
 <?php  $mid=$_GET['mid']; 
	include "dbconn.php";
	$rset = mysqli_query($conn, "select * from movies where mid='$mid';");
	$row=mysqli_fetch_assoc($rset);

	
	
 ?>
				<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<a href="review.php">Movie Review</a>
							<span><?php echo $row['mname']; ?></span>
						</div>
						</div>
				
									<div class="container">
				<div class="page">
						 <?php
						 include "dbconn.php";
						 $rset = mysqli_query($conn, "select * from movies where mid=$mid;"); 
			$row=mysqli_fetch_assoc($rset);
			
			?>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src="movies/<?php echo 's'.$mid ?>.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title"><?php echo   $row['mname']; ?></h2>
							<!--		<div class="movie-summary"> -->
										
										

								
				<!--		</div> -->
							<!--		<ul class="movie-meta"> -->
							<table>
									 
									<tr><td> <strong>Rating:</strong></td><td><?php echo   $row['rating']; ?></td></tr>
					<!--	<div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">3.00</strong> out of 5</span></div>-->
										
									<tr><td><strong>Length:</strong></td><td><?php echo   $row['len'].'(in minitus)'; ?></td></tr>
									<tr><td><strong>Premiere:</strong></td><td><?php echo   $row['year'].'-'.$row['date']; ?></td></tr>
								<tr><td><strong>Category:</strong></td><td><?php echo   $row['cat']; ?></td></tr>
								
									

								<?php// include "single_common.php" ?>
							<ul class="starring">
							
							<tr><td><strong>Directors:</strong></td><td><?php echo   $row['dir']; ?></td></tr>
								<tr><td><strong>Writers:</strong></td><td><?php echo   $row['wri']; ?></td></tr>
								<tr><td><strong>Hero:</strong></td><td><?php echo   $row['hname']; ?></td></tr>
								<tr><td><strong>Heroin</strong></td><td><?php echo   $row['hiname']; ?></td></tr>
								<tr><td valign="top"><strong>Discription:</strong></td><td><?php echo   $row['comm']; ?></td></tr>
							
								</table>
							
							
										
										<?php //echo $row['comm'];?></p>
										
										
								</div>
							</div> <!-- .row -->
							
						</div>
					</div>
				</div> <!-- .container -->
			</main>