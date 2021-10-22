import React, { useState, useEffect } from 'react';
import queryString from 'query-string';
import io from 'socket.io-client';
import './Chat.css';

let socket;

const Chat = ({ location }) => {
   //declaring hooks
   const [name, setName] = useState(''); // parecido com o método mágico set
   const [room, setRoom] = useState(''); // parecido com o método mágico set
   const [message, setMessage] = useState(''); // parecido com o método mágico set
   const [messages, setMessages] = useState([]); // parecido com o método mágico set
   const ENDPOINT = 'http://localhost:3333';

   useEffect(() => {
      const { name, room } = queryString.parse(location.search); 

      socket = io(ENDPOINT);

      setName(name);
      setRoom(room);

      socket.emit('join', { name, room }, ({ error }) => {
         alert(error);
      });

      return () => {
         socket.emit('disconnect');
         socket.off(); // disconnect the socket instance
      }

   }, [ENDPOINT, location.search]);

   useEffect(() => {
      socket.on('message', (message) => {
         setMessages([...messages, message]);
      });
   }, [messages]);

   // function for sending messages
   const sendMessage = (event) => {
      event.preventDefault();

      if(message) {
         socket.emit('sendMessage', message, () => setMessage(''));
      }
   }

   console.log(message, messages);

   return (
      <div className="outerContainer">
         <div className="container">
            <input 
               type="text" 
               value={message} 
               onChange={(event) => setMessage(event.target.value)} 
               onKeyPress={event => event.key === 'Enter' ? sendMessage(event) : null  }
            />
         </div>
      </div>
   )
};

export default Chat;