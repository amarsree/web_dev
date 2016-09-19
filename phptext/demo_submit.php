<?php
include("./phptextClass.php");

if(isset($_POST['Text'])&&(trim($_POST['Text'])!=''))
{
	/*get texts first letter and convert to uppercase*/
	$text=strtoupper(strip_tags($_POST['Text']{0}));
	
	/*create class object*/
	$phptextObj = new phptextClass();
	
	/*phptext function to genrate image with text*/
	echo $phptextObj->phptext($text,'#FFF','',100,260,260,'img/',$text.'.jpg');
} ?>