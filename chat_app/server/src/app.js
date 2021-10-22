const express = require('express');
const socketio = require('socket.io');
const http =  require('http');

const { addUser, removeUser, getUser, getUsersInRoom } = require('../services/users');

const PORT = process.env.PORT || 3333;

const router = require('../routes/routes');

const app = express();
const server = http.createServer(app);
const io = socketio(server, {   
   cors: {
      origin: 'http://localhost:3000',
      methods: ["GET", "POST"]
   }   
}); // instanciando o socket.io | objeto para evitar o erro de CORS

io.on('connection', (socket) => {
   
   socket.on('join', ({ name, room }, callback) => {
      const { error, user } = addUser({ id: socket.id, name, room });

      if(error) {
         callback(error);
      }
      // emitindo o evento do server para o client
      socket.emit('message', { user: 'admin', text: `${user.name}, Welcome to the room ${user.room}!` });
      socket.broadcast.to(user.room).emit('message', { user:'admin', text: `${user.name} has joined!` })
      
      socket.join(user.room);

      callback();
   });

   // esperando o evendo do client para o server
   socket.on('sendMessage', (message, callback) => {
      const user = getUser(socket.id);
      io.to(user.room).emit('message', { user: user.name, text: message });
      callback();
   });

   socket.on('disconnect', () => {
      console.log("User had a left!");
   })
});

app.use(router); // midleware

server.listen(PORT, () => {
   console.log(`Server is running!!! on port ${PORT}`);
})




