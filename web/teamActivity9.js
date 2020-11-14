const http = require("http");
const fs = require('fs');

function onRequest(req, res) {
    if(req.url === '/home') {
        fs.readFile('mathstuff.html', function(err, data) {
            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(data);
        return;
        });
    }
}

var server = http.createServer(onRequest);

server.listen(7777);
console.log('The server is now listening on port 7777');