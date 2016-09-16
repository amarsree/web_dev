<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="style.css">
  
</head>
<body >

  <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

<?php 



if(!(isset($_GET["rno"]))){

$i=1;

}
else{
  $i=$_GET["rno"];
include 'dbconn.php';
$att=$_GET['att'];
$rno=$_GET['rno']-1;
mysqli_query($conn, "insert into att (rno,name,date1,att,class,sir) values ('$rno','ana','2001-1-1','$att','cls','sir');");
}

 ?>
  
<div class="container">
<h1> attene</h1>

<table border="1" width="75%" align="center">
  <th colspan="1">
    <td align="left">
      <b>Roll number:<?php echo " ".$i; ?></b>
    </td>
  </th>
  <tr>
    <td>
      
    </td><td align="center">
<form method="get" action="">
      <input type="submit" value="present" > 
      <input type="hidden" name="att" value="1" > 
      <input type="hidden" name="rno" value="<?php echo $i+1; ?>" > 
</form>
    </td>
<form method="get" action="">
    <td align="left">
     <input type="submit" value="absent" > 
      <input type="hidden" name="att" value="0" > 
      <input type="hidden" name="rno" value="<?php echo $i+1 ?>" > 
    </td>
    </form>
  </tr>
</table>


</div>

</body>
</html>
