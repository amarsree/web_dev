<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

 if(isset($_GET['q']))
 {
    $q=$_GET['q'];
 }else{
    $q='%';
 }
echo $q;

 include 'dbconn.php';


//$q = intval($_GET['q']);

      
       // echo $q;
         //   $rset = mysqli_query($conn, "SELECT * FROM `movies` where cat=$q ORDER BY `cat`");

            $rset = mysqli_query($conn, "SELECT * FROM `movies` where cat like '$q' ORDER BY `cat` DESC ");
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
</body>
</html>