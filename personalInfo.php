<?php
session_start();

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$baseDatos = "login_db";

$conectar = mysqli_connect($servidor, $usuario, $contraseña, $baseDatos);

if (isset($_SESSION["startedSec"])) {
    $userEmail = $_SESSION["startedSec"];

    $checkTableQuery = "SHOW TABLES LIKE 'personal_info'";
    $tableResult = $conectar->query($checkTableQuery);

    if ($tableResult->num_rows > 0) {

        $selectQuery = "SELECT * FROM personal_info WHERE email = '$userEmail'";
        $selectResult = $conectar->query($selectQuery);

        if ($selectResult->num_rows > 0) {
            $userInfo = $selectResult->fetch_assoc();
        }
    } else {
        echo "'personal_info' doen't exist in database.";
    }
} else {
    echo "'startedSec' not defined.";
}

mysqli_close($conectar);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/personalInfo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Personal Info</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="user-details">
                <img src="./assets/dark_blue.jpg" alt="User Img">
                <span class="user-name">OmarLane</span>
                <div class="dropdown">
                    <span class="arrow">&#9660;</span>
                    <div class="dropdown-content">
                        <a class="myProfile" href="./peronaslInfo.php">
                            <div class="profile">
                                <img src="./assets/Profile.svg" alt="Profile Icon">My Profile
                            </div>
                        </a>
                        <a class="chatGroup" href="#">
                            <div class="group">
                                <img src="./assets/Group_Chat.svg" alt="Group Chat Icon">Group Chat
                            </div>
                        </a>
                        <a class="logOut" href="./register.php">
                            <div class="logout">
                                <img src="./assets/Logout.svg" alt="Sign Out Icon">Logout
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <h1>Personal Info</h1>
            <h3>Basic info, like your name and photo</h3>
            <div class="info-table">
                <div class="info-row1">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                    <a href="./changeInfo.php"><button type="submit">Edit</button></a>
                </div>
                <div class="info-row">
                    <label for="photo">PHOTO</label>
                    <img src="./assets/dark_blue.jpg" alt="User Img">
                </div>
                <div class="info-row">
                    <label for="name">NAME</label>
                    <div id="name"><?php echo isset($userInfo['name']) ? $userInfo['name'] : ''; ?></div>
                </div>
                <div class="info-row">
                    <label for="bio">BIO</label>
                    <div id="bio"><?php echo isset($userInfo['bio']) ? $userInfo['bio'] : ''; ?></div>
                </div>
                <div class="info-row">
                    <label for="phone">PHONE</label>
                    <div id="phone"><?php echo isset($userInfo['phone']) ? $userInfo['phone'] : ''; ?></div>
                </div>
                <div class="info-row">
                    <label for="email">EMAIL</label>
                    <div id="email"><?php echo isset($userInfo['email']) ? $userInfo['email'] : ''; ?></div>
                </div>
                <div class="info-row">
                    <label for="password">PASSWORD</label>
                    <div id="password"><?php echo isset($userInfo['password']) ? $userInfo['password'] : ''; ?></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>