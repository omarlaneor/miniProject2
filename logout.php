<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();


// Cerrar la sesión
session_destroy();

// Redirigir al usuario a la página principal
header("Location: ./index.php");
