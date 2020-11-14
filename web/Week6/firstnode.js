const http = require("http");
const fs = require('fs');

function onRequest(req, res) {
    if(req.url === '/home') {
        console.log(req);
        res.writeHead(200, { 'Content-Type': 'text/html'})
        res.write('<h1>Welcome to my homepage!</h1>');
        res.end();
        return;
    }
    if(req.url === '/getData') {
        res.writeHead(200, {"Content-Type": "application/json"});
        let student = {name: 'Landon', class: 'CSE 341'};
        res.write(JSON.stringify(student));
        res.end();
        return;
    }
    if(req.url === '/whatDoesTheFoxSay') {
        res.writeHead(200, { 'Content-Type': 'text/html'})
        res.write('<h1>Ne Ne Ne Ne Ne NeNe NeNe!</h1>');
        res.end();
        return;
    }
    res.writeHead(404, {'Content-Type': 'text/html'})
    res.write('<h1>Error: Page not found :(</h1>');
    res.end();
}

var server = http.createServer(onRequest);

server.listen(8888);
console.log('The server is now listening on port 8888');