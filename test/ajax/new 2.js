var xmlHttp = createXMHttpRequestObject();
function createXMHttpRequestObject(){
	var xmlHttp;
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
		
		}else{
		try{
			
			xmlHttp = new XMLHttpRequest();
		}
			catch(e){
				xmlHttp = false;
			}	
		}
	if(!xmlHttp)
	{
		alert('can not cnnect');
	}
	else{
	return xmlHttp;
	}
function process(){
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
		food = encodeURIComponemt(document.getElementById("userInput").value);
		xmlHttp.open("GET", "foodstore.php?food="+food, true);
		xmlHttp.onreadystatechange = handleServerRespnce;
		xmlHttp.send(null);
		}else{
		setTimeout('process()',1000);
	}
}
function handleServerRespnce(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			xmlResponse=xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("underInput").innerHTML = '<span style="color:blue">' +  message + </span>;
		}else{		
		alert('there was sme thing wrong');
		}
	}
}