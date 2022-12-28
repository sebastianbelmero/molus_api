import express from 'express';
import http from 'http';
import { Server } from 'socket.io';
import fetch from 'node-fetch';

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
        const { message, token, to_user_id, url } = msg;
        fetch(url, {
            "headers": {
                "content-type": "application/json",
                "Authorization": token
            },
            "body": JSON.stringify({
                "message": message,
                "to_user_id": to_user_id
            }),
            "method": 'POST'
        }).then(res => {
            res.json().then(data => {
                socket.broadcast.emit('sendChatToClient', msg);
            })
        })
    });
})

server.listen(4500, () => {
    console.log('Server is running on port 4500');
})