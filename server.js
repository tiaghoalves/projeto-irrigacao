var http = require('http').createServer(servidor);
var fs = require('fs');
var io = require('socket.io').listen(http);
var five = require('johnny-five');
var board = new five.Board();

board.on('ready', function(){
  console.log("Arduino Pronto!");
  var led = new five.Led("13");

  this.alterarLed = function(){
    led.blink();
  }

});

io.on("connection", function (socket){
  socket.on('clicou', function(botao){
      console.log(botao);
      board.alterarLed();
  });

});

function servidor(req, res){
  console.log(req.url);
  fs.readFile(__dirname + '/resources/views/planta/visualizar.blade.php', function(err, html){
    res.writeHead(200, {"Content-Type" : "text/html"});
    res.write(html);
    res.end();
  });
};

http.listen(3000, function(){
	console.log("Servidor Online em http://localhost:3000");
});

