var express = require('express');
var app = express();

app.listen(3000, function(){
    console.log('Server is running on port 3000.')
});

app.get('/query', callQuery);

function callQuery(req, res){
    var spawn = require('child_process').spawn;
    var process = spawn('php', ["./hello.php", req.query.username, req.query.title]);

    process.stdout.on('data', function(data){
        console.log('data received from PHP Script ::' + data.toString());
        res.send(data.toString());
    });
}