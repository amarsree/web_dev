<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index1.php">Home</a>
							<span><?php 
							$email=$_SESSION['email'];
							echo $_SESSION['uname']; ?></span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
								<?php
								include 'dbconn.php';
								$rset = mysqli_query ($conn, "SELECT * FROM registration where email='$email';");
							$row=mysqli_fetch_assoc($rset);
							
								?>
								<figure class="movie-poster"><img src="uploads/<?php echo $email.'.jpg'?>" alt="profile pic not avaliable....!please upload your pic" height="250" width="250"></figure>
								</div>
								<div class="col-md-6">
								
									<h2 class="Name">
									<?php 
									echo $_SESSION['uname'];
									//echo $_SESSION['uname']; ?></h2>
									
									
									
								</li>
									<?php
							
						//	$rset = mysqli_query($conn, "select * from registration where email='amar@123';"); 
						//		 $email1=$_SESSION['email'];
						//		 echo $email1;
								 $email=$_SESSION['email'];
								
							
 
					

			
			
		//	echo "first name :" .$row['uname']."<BR>";
		//	echo "password :" .$row['pswd']."<BR>";
		//	echo "gender :" .$row['sex']."<BR>";
		//	echo "email :" .$row['email']."<BR>";
		//	echo "mno :" .$row['mno']."<BR>";
		//	echo "hero :" .$row['hname']."<BR>";
		//	echo "heroin:" .$row['hiname']."<BR>";
		//	echo "dob :" .$row['dob']."<BR>";
		//	echo "<hr>";
				 
								//$row=mysqli_fetch_assoc($rset);
							//	echo $row['email']; 
								?>
								<table>
								<tr><td><strong>uname:</strong></td> <td><?php  echo $row['uname']; ?> </tr></td>			
								<tr><td><strong>email:</strong> </td><td><?php  echo $row['email']; ?></tr></td> 
								<tr><td><strong>mobile number:</strong> </td><td><?php  echo $row['mno']; ?> </tr></td>
								<tr><td><strong>favoriate hero:</strong></td><td> <?php  echo $row['hname']; ?></tr></td>
								<tr><td><strong>favoriate heroine:</strong> </td><td><?php  echo $row['hiname']; ?> </tr></td>
								<tr><td><strong>Date of birth: </strong></td><td> <?php  echo $row['dob']; ?> </tr></td>
								</table>
								

									
								</div>
							
						</div>
					</div>
				</div> <!-- .container -->
			</main>