var http = require("http");

function onRequest(request,response){
	console.log("a request made" + request.url);
	response.writeHead(200,{"Context-Type":"text/plain"});

	response.write("heat is the data");
	response.end();
}

http.createServer(onRequest).listen(88);

console.log("server started");