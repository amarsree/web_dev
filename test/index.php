<?xml version = '1.0' encoding = 'UIF-8' ?>
<!DOCTYPE html>
<html>
<head>
<title>ajax</title>

<script language = "javascript" type="text/javascript" >
xmlhttp = new XMLHttpRequest();

function getscores()
{	
	xmlhttp.onreadystatechange =
	function()
	{	
	if(xmlhttp.readyState ==4 && xmlhttp.status ==200)
		{
			document.getElementById("scores").innerHTML = xmlhttp.responseXML;
		}
		else
		{
			document.getElementById("scores").innerHTML = "errr";
		}
	}
	xmlhttp.open("GET", "http://localhost/test/scr.php", true);
	xmlhttp.send();
	setTimeout('getscores()',0);
	}
</script>
</head>
<body onload="getscores()">
<div id="scores">

</div>
<br>
<input type="text" id='userInput' />






</body>
</html>