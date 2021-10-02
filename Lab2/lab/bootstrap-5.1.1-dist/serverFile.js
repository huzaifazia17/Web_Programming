var http = require('http');
var fs = require('fs');

function send404Response(response){
    response.writeHead(404,{"Content-Type": "text/plain"});
    response.write("Error 404: page not found");
    response.end();
}

function onRequest(request, response){
    if(request.method=='GET'&& request.url=='/'){
        response.writeHead(200,{'Content-Type': 'text/html'});
        fs.createReadStream("./index.html").pipe(response);
    }else{
        send404Response(response);
    }
};

var server = http.createServer(onRequest);
server.listen(1338,'127.0.0.1');
console.log('Server is runnings at http://127.0.0.1:1338/');