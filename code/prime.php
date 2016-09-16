<?php
$num=280;
$count=0;
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
$sum=0;
for ($i=2; $i < $num; $i++) { 
 $a = IsPrime($i);  
    if ($a==1) { 
     $sum =$sum+$i;
if(IsPrime($sum)){
    if($sum<=$num){
    $count=$count+1;
      }
   }
      }
    
}
echo $count-1;
?>