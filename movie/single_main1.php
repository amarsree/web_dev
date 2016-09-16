<main class="main-content">
<div class="container">
 <?php  $mid=$_GET['mid']; 
	include "dbconn.php";
	$rset = mysqli_query($conn, "select * from movies where mid='$mid';");
	$row=mysqli_fetch_assoc($rset);
?>
				<div class="breadcrumbs">
							<a href="index1.php">Home</a>
							<a href="review1.php">Movie Review</a>
							<span><?php echo $row['mname']; ?></span>
						</div>
						</div>
				
									<div class="container">
				<div class="page">
						 <?php
						
						 $rset = mysqli_query($conn, "select * from movies where mid=$mid;"); 
			$row=mysqli_fetch_assoc($rset);
			
			?>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src="movies/<?php echo 's'.$mid.'.jpg';?>" alt="#" ></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title"><?php echo   $row['mname']; ?></h2>
							<!--		<div class="movie-summary"> -->
										
										

								
				<!--		</div> -->
							<!--		<ul class="movie-meta"> -->
							<table >
									 
									<tr><td> <strong>Rating:</strong></td><td><?php echo $row['rating']; ?></td></tr>
					<!--	<div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">3.00</strong> out of 5</span></div>-->
										
									<tr><td><strong>Length:</strong></td><td><?php echo $row['len'].'(in minitus)'; ?></td></tr>
									<tr><td><strong>Premiere:</strong></td><td><?php echo $row['year'].'-'.$row['date']; ?></td></tr>
								<tr><td><strong>Category:</strong></td><td><?php echo $row['cat']; ?></td></tr>
								
									

								<?php// include "single_common.php" ?>
							<ul class="starring">
							
							
								<tr><td><strong>Directors:</strong></td><td><?php echo   $row['dir']; ?></td></tr>
								<tr><td><strong>Writers:</strong></td><td><?php echo   $row['wri']; ?></td></tr>
								<tr><td><strong>Hero:</strong></td><td><?php echo   $row['hname']; ?></td></tr>
								<tr><td><strong>Heroin</strong></td><td><?php echo   $row['hiname']; ?></td></tr>
								<tr><td valign="top"><strong>Discription:</strong></td><td><?php echo   $row['comm']; ?></td></tr>
							
								<tr><td><strong>Users review</strong></td>
								<td>
								<?php   
								include "dbconn.php";
								
								 $aset = mysqli_query($conn, "select avg(user_review) AS avgrv from reviews where mid=$mid");
								 $arows =mysqli_num_rows($aset);
								 if($arows==0)
								 {
								echo "no user had  rated yet";
								}
								else{
							
							$arow=mysqli_fetch_array($aset);
								
								 $avgrv=$arow['avgrv'];
								 echo $avgrv;
								}
								
							//	$aset = mysqli_query($conn, "SELECT avg(user_review) as ag from reviews where mid=45");
							//	
								
							//	
							//	$arows =mysqli_fetch_array($aset);
							//	echo   $arow['ag'];
							//	echo   'ag';
								//	$row['ag']; ?></td></tr>
								</table>
							
<?php
$email=$_SESSION['email'];
$rset = mysqli_query($conn, "SELECT * FROM reviews WHERE mid='$mid' and email='$email';");
$rows =mysqli_num_rows($rset);
echo "<table border='1' align='left' width=45%>";
				if($rows==0)
				{
				
				echo	"<form action='' method='get' >";
			echo "<tr><td><h3><i>Post Your Rating here.....?</i></h3></td></tr>";

			echo	"<INPUT type='hidden' name='mid' value=".$row['mid'].">";
			echo	"<tr><td><INPUT type='radio' name='rating' value='1' > 1";

			echo	"<INPUT type='radio' name='rating' value='2'> 2";

			echo	"<INPUT type='radio' name='rating' value='3'> 3";

			echo	"<INPUT type='radio' name='rating' value='4' checked> 4";

			echo	"<INPUT type='radio' name='rating'  value='5'> 5</tr></td> <br>";

			echo	"<tr><td><input type='submit' value='submit' ></tr></td>";
			echo	"</form>";
				
				}
			else 
			{
				$row=mysqli_fetch_assoc($rset);
				echo "<tr><td><strong>your rating is ".$row['user_review']."</strong></tr></td></table>";
			}
?>		

</div> 					
							
							

<?php if(isset($_GET['rating']))
{$mid=$row['mid'];
$rating=$_GET['rating'];
$email=$_SESSION['email'];
echo 'your rating '.$rating.' is submitted';

mysqli_query($conn,"insert into reviews (mid,user_review,email) values('$mid','$rating','$email')"); 
}
?>	
			<!-- .row -->
<?php 
$comset = mysqli_query($conn, "select * from comments where mid='$mid' order by time_stamp;");
	while($row=mysqli_fetch_assoc($comset))
	{   
		echo $row['email'].'<br>';
		echo $row['comm'];
	}
?>
			
			
<div  class="starring">
<?php  
if(!isset($_GET['comm']))
{
echo	'Post your comments here..! <br>';
echo	'<form action="" method="get" onSubmit="return validate();">';
echo  '<input type="hidden" name="mid" value="'.$mid.'"><textarea rows="4" cols="50" name="comm" id="comm"></textarea><br>';
echo  '<input type="submit" value="submit ">';
echo	'</form>';
}
else
{
$mid=$_GET['mid'];
$comm=$_GET['comm'];
$email=$_SESSION['email'];
include "dbconn.php";
//echo "insert into comments (mid,comm,email) values($mid,'$comm','$email')"; 
mysqli_query($conn,"insert into comments (mid,comm,email) values($mid,'$comm','$email')"); 
}



?>	
</div>
	
	
 	<!-- comment valadation -->	
<script type="text/javascript">
 		
function validate()
  {
		    var comm = document.getElementById('comm').value;

         //  var nm = /^[A-Za-z ] {4,30}$/; //Regular Expression to match a value with exactly 12 characters 
        if(comm == "") 
         { 
       alert("Comment  should not be Empty!");
         return false;
         }	 

    return true;
  }	

  </script>
		
		
		
		
		


						
					</div>
				</div> <!-- .container -->
			</main>