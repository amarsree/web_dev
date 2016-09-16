<?php
error_reporting(E_ALL);
function solveMeFirst($a,$b){
  // Hint: Type return $a + $b; below  
 return $a+$b;  
}
$handle = fopen ("t.txt","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);

//print $_a;
//print $_b;

print $sum;
fclose($handle);
?>