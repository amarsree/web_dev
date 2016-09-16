<?php

   function IsPrime($n)  
    {  
     for($x=2; $x<$n; $x++)  
       {  
          if($n %$x ==0)  
              {  
               return 0;  
              }  
        }  
      return 1;  
       } 


//error_reporting(E_ALL);
//Program to find prime numbers in between a range
$sum=0;
$count=0;
$num =15;

for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}

}
if( $k == $j ){
$sum=$sum+$j;
    $a = IsPrime($sum);  
    if ($a==0) { 
   
			}
   // echo 'This is not a Prime Number.....'."\n";  
    else {
    $count=$count+1; 
   // echo $j.'e ';
   // echo 'This is a Prime Number..'."\n";  
}
 
echo $j."-"; 
echo $sum.'s<br>';
//if ($sum=)
}//echo '<br>';
}
echo $count-1;
 ?>