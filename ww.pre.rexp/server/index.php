<?php
//creacion d un socket
set_time_limit(0);
$ipHost = "192.168.1.113";
$puerto = "300034";
$socket = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"));
if ($socket < 0) {
    echo "failed to create socket: " . socket_strerror($socket) . "\n";
    exit();
}
echo "ezd";
if (($ret = socket_bind($socket, $ipHost, $puerto)) < 0) {
    echo "failed to bind socket: " . socket_strerror($socket) . "\n";
    exit();
}
echo socket_strerror(socket_last_error());

if (($ret = socket_listen($socket)) < 0) {
    echo "failed to listen to socket: " . socket_strerror($ret) . "\n";
    exit();
}
$i = 0;
while (true) {
    $client[++$i] = socket_accept($socket);
    //mensaje resibdo
    $mensaje = socket_read($client[$i], 1024);
    echo "mensaje numero: {$i} \n";
    echo "mensaje : {$mensaje} \n";
    //mensaje a enviar 
    $mensaje = "hola " . $mensaje . "\n";
    socket_write($client[$i], $mensaje, 1024);
    socket_close($client[$i]);
}
socket_close($socket);
