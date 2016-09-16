<?php
header('Content-Type: Text/xml');
echo "<?xml version = '1.0' encoding = 'UIF-8'  standalone='yes' ?>";
echo "<response>";
$food = $_GET['food'];
$foodarray = array{'meat','sambar','brinjal'};
if(in_array($food, $foodarray))

	echo "we sell ".$food ;

elseif($food=='')

	echo "enter some thing"; 

else
	echo 'we dont sell '. $food;


echo "<response>";
?>