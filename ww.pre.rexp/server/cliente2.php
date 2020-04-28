<?php

set_time_limit(0);
$ipHost = "192.168.1.113";
$puerto = "300034";
$i = 0;
while ($i < 1) {
    $mensaje = ["hola" => "cliente 2"];
    $mensaje["numero"] = "claro";
    $mensaje["direcciones"] = [
        "calle" => [
            "coll i pujoll", "rodez"
        ],
        "numeros" => [
            1,
            2
        ]
    ];

    $mensaje = json_encode($mensaje);
    $socket = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"));
    $result = socket_connect($socket, $ipHost, $puerto);
    socket_write($socket, $mensaje, strlen($mensaje));
    $mensaje = socket_read($socket, 1024);
    echo $mensaje . "\n";
    socket_close($socket);
    $i++;
}
