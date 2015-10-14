<?php 
// Settings
$port = 8000;
$address = "127.0.0.1";

// Create TCP socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Connect to address and port
$result = socket_connect($socket, $address, $port);

// Send get request
$in = "GET /echo.php?message=".$argv[1]." HTTP/1.1\r\n\r\n";
socket_write($socket, $in, strlen($in));

// Print results
while ($out = socket_read($socket, 1024))
    echo $out;

// Close socket
socket_close($socket);
?>