<?php include 'acces_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
</head>
<body >

<?php  include 'header.php'; ?>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          <?php
          $email = $_SESSION['email']; 
            include 'dbconn.php';
            $rset = mysqli_query($conn, "select fname,lname,email,uid from reg where email='$email'");
            $row=mysqli_fetch_assoc($rset);
            
            
           
           ?>
            <div class="col-md-12 lead"><?php echo $_SESSION['fname']; ?> profile<hr></div>
          </div>
          <div class="row">
			<div class="col-md-4 text-center">
<?php
include("./phptextClass.php");

if(isset($_SESSION['fname'])&&(trim($_SESSION['fname'])!=''))
{
  /*get texts first letter and convert to uppercase*/
  $text=strtoupper(strip_tags($_SESSION['fname']{0}));
  
  /*create class object*/
  $phptextObj = new phptextClass();
  
  /*phptext function to genrate image with text*/
  $path=$phptextObj->phptext($text,'#FFF','',50,120,120,'img/',$text.'.jpg');
} 
?>
           <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
           display:block; margin:auto;" src='<?php echo $path."?size=120x120" ?>' >
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">Email:</span> <?php echo $_SESSION['email']; ?><br>
                  <span class="text-muted">Birth date:</span> 01.01.2001<br>
                  <span class="text-muted">Gender:</span> male<br><br>
                  <small class="text-muted">Created: 01.01.2015</small>
                </div>
                <div class="col-md-6">
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-comment text-muted"></i> 500
                  </div>
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-thumbs-up text-muted"></i> 1500
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   
<?php  include 'footer.php'; ?>

</body>
</html>
