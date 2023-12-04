<?php
include "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];

$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sqlInsert = "INSERT INTO usuarios (`email`, `password`) VALUES ('$email', '$PasswordEncriptado')";
$sqlSelect = "SELECT * FROM usuarios WHERE email = '$email'";

if (mysqli_query($conectar, $sqlInsert)) {

    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];

    $sqlPersonalInfo = "INSERT INTO personal_info (`name`, `bio`, `phone`, `email`, `password`) VALUES ('$name', '$bio', '$phone', '$email', '$PasswordEncriptado')";

    if (mysqli_query($conectar, $sqlPersonalInfo)) {
        $resultSelect = mysqli_query($conectar, $sqlSelect);
        $data = mysqli_fetch_assoc($resultSelect);

        session_start();
        $_SESSION["startedSec"] = $data;

        header("Location: ./personalInfo.php");
        exit();
    } else {
        echo "Error inserting into personal_info: " . mysqli_error($conectar);
    }
} else {
    echo "Connection error: " . mysqli_error($conectar);
}

mysqli_close($conectar);
