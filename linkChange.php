<?php

session_start();

$userId = $_SESSION["startedSec"]["id"];


include "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$phone = $_POST['phone'];

$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE usuarios SET `name` = '$name', `bio` = '$bio', `phone` = '$phone', `contraseña` = '$PasswordEncriptado' WHERE `id` = '$userId'";

if ($conectar->query($sql) === TRUE) {

    $selecionar = "SELECT * FROM  usuarios where email ='$email'";


    $con = $conectar->prepare($selecionar);
    $con->execute();
    $resul = $con->get_result();
    $data = $resul->fetch_assoc();

    session_start();

    $_SESSION["startedSec"] = $data;

    header("Location: ./personalInfo.php");
} else {
    echo "User information update error: " . $conectar->error;
}

$conectar->close();
