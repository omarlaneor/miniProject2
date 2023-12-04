<?php

session_start();

$userId = $_SESSION["seccionIni"]["id"];


include "conn.php";

$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$phone = $_POST['phone'];


$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (email, contraseña, name, bio, phone) VALUES (?, ?, ?, ?, ?);";

$stmt = $conectar->prepare($sql);

$stmt->bind_param("asdfg", $email, $PasswordEncriptado, $name, $bio, $phone);

$stmt->execute();

$stmt->close();

header("Location: ./personalInfo.php");

$conectar->close();
