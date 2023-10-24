<?php

$mysql = new mysqli("localhost", "root", "", "space");

if ($mysql->connect_errno) {
    echo "Falló la conexión a MySQL: " . $mysqli->connect_error;
    exit();
}

?>