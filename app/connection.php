<?php
    function connection_db() {
        $connection = new mysqli('localhost', 'root', '', 'factorial');
        if($connection->connect_errno) {
            echo 'Error en la conexión: ' . $connection->connect_error;
        }
        $connection->set_charset('utf8');
        return $connection;
    }
?>