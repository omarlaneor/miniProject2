<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = '';
$baseDatos =  "login_db";

try {
    $conectar = mysqli_connect($servidor, $usuario, $pass, $baseDatos);

    if (!$conectar) {
        throw new Exception('Conection error: ' . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
