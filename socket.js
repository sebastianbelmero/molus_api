const express = require('express');
const http = require('http');
const { Server } = require('socket.io');
const fetch = require('node-fetch');

const app = express();
const server = http.createServer(app);
const io = new Server(server, {
    cors: {
        origin: '*',
    }
});

io.on('connection', (socket) => {
    socket.on('disconnect', () => {
        console.log('user disconnected');
    });

    socket.on('sendChatToServer', (msg) => {
        const { message, token, friend_id, url } = msg;
        fetch(url, {
            "headers": {
                "content-type": "application/json",
                "Authorization": token
            },
            "body": JSON.stringify({
                "message": message,
                "friend_id": friend_id
            }),
            "method": 'POST'
        }).then(res => {
            res.json().then(data => {
                console.log(data)
                socket.broadcast.emit('sendChatToClient', msg);
            })
        })
    });
})

server.listen(4500, () => {
    console.log('Server is running on port 4500');
})