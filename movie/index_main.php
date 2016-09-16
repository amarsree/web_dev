<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
									<?php 
									
			
			include "dbconn.php";
			$rset = mysqli_query($conn, "SELECT mid FROM movies ORDER BY time_stamp desc LIMIT 3;");
									
				while($row=mysqli_fetch_assoc($rset))
				{
					
					   $mid=$row['mid'];
					 //  echo $mid;
					echo '<li><a href="single.php?id='.$mid.'"><img src="movies/'.$mid.'.jpg" alt="Slide '.$mid.' style="width:128px;height:128px;"></a></li>';
				 }	
				
									
				//	echo "<div class='movie'>";
				//	echo "<figure class='movie-poster'>
				//	<img src='movies/".$mid.".jpg'"."alt='".$mname."' height=42px width=42px >
				//	</figure>";
				//	echo "<div class='movie-title'><a href='single1.php?mid=".$mid."'>".$mname."</a></div>";
				//	echo "</div>";
					
					





					
									
									
							//		for ($i=1;$i<=3;$i++){
							//		echo '<li><a href="<single.php?id='.$i.'"><img src="dummy/slide-'.$i.'.jpg" alt="Slide '.$i.' style="width:128px;height:128px;"></a></li>';
							//		}
									?>
									<a href="<single.php?id=4"><img src="dummy/slide-4.jpg" alt="Slide 4 style="width:128px;height:128px;"></a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
							
								<?php
								
								$rset = mysqli_query($conn, "SELECT * FROM movies  ORDER BY time_stamp desc  LIMIT 3 OFFSET 3;");	 
								
								while($row=mysqli_fetch_assoc($rset))
								{
									
									$mid=$row['mid'];
									echo '<div class="col-sm-6 col-md-12">';
								 echo'<div class="latest-movie"><a href="single.php?id='.$mid.'"><img src="movies/'.$mid.'.jpg" alt="Movie 1"></a>
										</div>';
								echo "</div>";
								}
								
								
								?>
								
								
										 
									
									
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<?php
							
							
							$rset = mysqli_query($conn, "SELECT * FROM movies  ORDER BY time_stamp desc  LIMIT 4 OFFSET 6;");	 
								
								while($row=mysqli_fetch_assoc($rset))
								{
									$mid=$row['mid'];
									echo '<div class="col-sm-6 col-md-3">';
									
								echo '<div class="latest-movie">';
								echo '<a href="single.php?id='.$mid.'"><img src="movies/'.$mid.'.jpg" alt="Movie 3"></a>';
							  echo	'</div>';
						echo '</div>';
								}
							
							?>
							
							
						<!--	<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="single.php"><img src="dummy/thumb-4.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="single.php"><img src="dummy/thumb-5.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="single.php"><img src="dummy/thumb-6.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						<?php //include "index_bottom.php" ?>
					</div>
				</div> <!-- .container -->
			</main>