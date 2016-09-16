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
									<figure class="movie-poster"><img src="dummy/single-image.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title"><?php echo   $row['mname']; ?></h2>
							<!--		<div class="movie-summary"> -->
										
										<table border="1">
										<tr><td><p align='justify'>
										<?php echo $row['comm'];?></p>
										</tr></td>
										</table>

								
				<!--		</div> -->
									<ul class="movie-meta">
										<li><strong>Rating:</strong> <?php echo   $row['rating']; ?>
					<!--	<div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">3.00</strong> out of 5</span></div>-->
										</li>
										<li><strong>Length:</strong><?php echo   $row['len'].'(in minitus)'; ?></li>
										<li><strong>Premiere:</strong><?php echo   $row['year'].'-'.$row['date']; ?></li>
										<li><strong>Category:</strong> <?php echo   $row['cat']; ?></li>
									</ul>

									