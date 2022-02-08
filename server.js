const http = require('http');

function reponderPeticion(request,response){
    response.end ('Hola Mundo');

}

let server = http.createServer(reponderPeticion);

server.listen(3000);