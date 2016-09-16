<html>
<head>
<title>ajax</title>

</head>


<body>
<?php
echo "<?xml version = '1.0' encoding = 'UIF-8'  standalone='yes' ?>";
echo "<response>";
//$food = $_GET['food'];

 'encodeURIComponemt(document.getElementById("userInput").value);'
$foodarray = array ('meat','sambar','brinjal');
if(in_array($food, $foodarray))
{	
	echo "we sell ".$food ;
}
elseif($food=='')
{
	echo "enter some thing"; 
}
else
{
	echo 'we dont sell '. $food;
}
echo "<response>";
?>

</body>
</html>