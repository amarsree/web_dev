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
		
		<?php include "index_header1.php" ?>
			
			
			
			<?php //include "index_main.php" ?>
		</div>
			<h1 align="center"> Movie deteils uploded...!</h1>
			
	<div claass="contact-form">	
<?php
	
	$mname=$_POST['mname'];
	$len=$_POST['len'];
	$year=$_POST['year'];
	$month=$_POST['month'];
	$day=$_POST['day'];
	$date=$month.'-'.$day;
	$cat=$_POST['cat'];
	$rating=$_POST['rating'];
	$dir=$_POST['dir'];
	$wri=$_POST['wri'];
	$hname=$_POST['hname'];
	$hiname=$_POST['hiname'];
	$comm=$_POST['comm'];
	
/*	echo "$mname"."<br>";
	echo "$len"."<br>";
	echo "$year"."<br>";
	echo "$date"."<br>";
	echo "$cat"."<br>";
	echo "$rating"."<br>";
	echo "$dir"."<br>";
	echo "$wri"."<br>";
	echo "$hname"."<br>";
	echo "$hiname"."<br>";
	echo "$comm"."<br>"; */ 
  include 'dbconn.php'; 
 
		mysqli_query ($conn,"insert into movies (mname,len,year,date,cat,rating,dir,wri,hname,hiname,comm)
      values('$mname','$len','$year','$date','$cat','$rating','$dir','$wri','$hname','$hiname','$comm')"); 
	  
	 
	  
	?>
	
	
	<?php 
/*
	 class fileing 
{
  function upload()
    {
		include 'dbconn.php';
      $name = $_FILES['file']['name'];
      $type = $_FILES['file']['type'];
      $tmp = $_FILES['file']['tmp_name'];
      $size = $_FILES['file']['size'];
	 

	 $rset = mysqli_query($conn, "select max(mid) as mx from movies");
	 // $row=mysqli_fetch_array($rset);
	 $row=mysqli_fetch_array($rset);
	 $mid=$row['mx'];
  //   echo $mid;
      $dir = "movies/"; //Create a folder named "uploads" and give write permission (chmod 777 uploads)
      $filepath = "movies/".$mid.".jpg";

      //echo $type."<br>".$size."<br>".$filepath;
      $validsize = 1000000; //Change this number to increase or decrease the file size limit
    
      if($size <= $validsize) 
        {
          if(move_uploaded_file($tmp, $filepath))
            {
              // echo "$name is uploaded into $dir";
            }
          else
            {
               echo " Not uploaded";
            }
        }
      else
        {
          echo "File size has to be less than $validsize";
        }
  } 
}

if(isset($_FILES['file'])) 
  {
    $fu = new fileing;
    $fu->upload();
  }
*/


// Access the $_FILES global variable for this specific file being uploaded
// and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
}


include 'dbconn.php';
 $rset = mysqli_query($conn, "select max(mid) as mx from movies");
	 // $row=mysqli_fetch_array($rset);
	 $row=mysqli_fetch_array($rset);
	 $mid=$row['mx'];
    
 
// END PHP Image Upload Error Handling ----------------------------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "movies/o$mid");
// Check to make sure the move result is true before continuing
//if ($moveResult != true) {
 //   echo "ERROR: File not uploaded. Try again.";
  //  unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
   // exit();
//}
//unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
// ---------- Include Universal Image Resizing Function --------
include_once("sizecode.php");
$target_file = "movies/o$mid";
$resized_file = "movies/$mid.jpg";
$wmax = 270;
$hmax = 244;
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);

$target_file = "movies/o$mid";
$resized_file = "movies/s$mid.jpg";
$wmax = 570;
$hmax = 516;
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);


// ----------- End Universal Image Resizing Function -----------
// Display things to the page so you can see what is happening for testing purposes
echo "The file named <strong>$mid</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
echo "The file extension is <strong>$fileExt</strong><br /><br />";
echo "The Error Message output for this upload is: $fileErrorMsg";

unlink ("movies/o$mid");

?>


 </div>      
 


	
	
	<?php include "index_footer.php" ?>
			
		
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>