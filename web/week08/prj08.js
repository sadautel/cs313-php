var http = require('http');

const onRequest = (request, resonse) => {

    if (request.url == '/home') {
        resonse.writeHead(200, {"Content-Type": "text/html"});
        resonse.write('<h1>Welcome to the Homepage!</h1>');
        resonse.end();
    }

    else if (request.url == '/getData') {
        resonse.writeHead(200, {"Content-Type": "application/json"});
        resonse.write('{"name":"Savannah Dautel","class":"cs313"}');
        resonse.end();
    }

    else {
        resonse.writeHead(404, {"Content-Type": "text/html"});
        resonse.write('<h1>Page not found!</h1>');
        resonse.end();
    }
}
var server = http.createServer(onRequest);
server.listen(8888);

console.log("http://localhost:8888/getData");
console.log("http://localhost:8888/home");


