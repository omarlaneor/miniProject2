<?php
require_once $_SERVER['DOCUMENT_ROOT'] . 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $photo = $_POST['photo'];
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO usuarios (name, bio, phone, email, password) VALUES ('$name', '$bio', '$phone', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: changeInfo.php");
        exit();
    } else {
        echo "Error saving the Info. " . $conn->error;
    }
}

$conn->close();
