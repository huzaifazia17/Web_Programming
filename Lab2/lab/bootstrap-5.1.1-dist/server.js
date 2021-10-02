var http = require('http');

var server = http.createServer(onRequest);

function onRequest(req,res) {

    res.writeHead (200, {'Content-Type': 'text/plain'});
    res.write('Hello World\n');
    res.end();
};

server.listen(1338, '127.0.0.1');

console.log('server running at http://127.0.0.1:1338/');