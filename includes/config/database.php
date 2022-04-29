<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'artecalendaweb');
    if(!$db) {
        echo "Fallo en la conexión";
        exit();
    }

    return $db;
}