<?php
include('/xampp/htdocs/miniProject2/miniProject2/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    // $photo = $_FILES['photo'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO usuarios (email, password, name, bio, phone) VALUES ('$email', '$password', '$name', '$bio', '$phone')";

    $conn = conexion();

    if (mysqli_query($conn, $sql)) {
        header("Location: personalInfo.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
