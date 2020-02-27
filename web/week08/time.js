const net = require('net');

function zeroFill(i) {
    return ( i < 10 ? '0' : '') + i;
}

function now () {
    var d = new Date;
    return d.getFullYear() + '-' + 
    zeroFill(d.getMonth() + 1) + '-' +
    zeroFill(d.getDate()) + ' ' +
    zeroFill(d.getHours()) + ':' +
    zeroFill(d.getMinutes()); 
}

var server = net.createServer(function (socket) {
    socket.end(now() + '\n');
});

server.listen(Number(process.argv[2]));
// const moment =  require('moment');

// const port =  process.argv[2];

// const server = net.createServer(socket => {
//     const time = moment().format("YYYY-MM-DD hh:mm");
//     socket.write(time);
//     socket.end('\n');
// });

// server.listen(port);