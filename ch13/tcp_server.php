<?php

$addr = gethostbyname('localhost');
$port = 5091;

print "addr : $addr <br>";

if (($sock = socket_create(AF_INET, SOCK_STREAM, 0)) < 0) {
    echo "socket_create() failed : reason : {socket_strerror($sock) <br>}";
}
