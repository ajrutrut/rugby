var http = require("http");
var fs = require("fs");

//function onRequest(request, response) {
	//response.writeHead(200, {'Content-Type': 'text/plain'});
	//response.end();
	//console.log("The Server has deployed...");
//}
//
http.createServer(function(request, response){
	fs.readFile("index.html",
	function(err, data) {
		response.writeHead(200,
		 {'Content-Type': 'text/html'});
		response.write(data);
		response.end();
	});

if (request.url === "/Projects/Rugby/index.html") {
	fs.readFile("index.html",
		function(err, data) {
			response.writeHead(200,
			{'Content-Type': 'text/html'});
				response.write(data);
				response.end();
		}); 
}
else {
	response.writeHead(200,
		{'Content-Type': 'text/html'});
		response.write("Default response. The requested url is" + " " + request.url);
		response.end();
	
}
}).listen(8080);


