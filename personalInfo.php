<?php

include('/xampp/htdocs/miniProject2/miniProject2/conn.php');
$conn = conexion();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conn, $sql);

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
                <img src="#" alt="User Img">
                <span class="user-name">Username</span>
                <div class="dropdown">
                    <span class="arrow">&#9660;</span>
                    <div class="dropdown-content">
                        <a class="myProfile" href="/personalInfo.php">
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
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <div class="info-row1">
                        <h2>Profile</h2>
                        <p>Some info may be visible to other people</p>
                        <a href="/changeInfo.php"><button type="submit">Edit</button></a>
                    </div>
                    <div class="info-row">
                        <label for="photo">PHOTO</label>
                        <img src="#" alt="User Img">
                    </div>
                    <div class="info-row">
                        <label for="name">NAME</label>
                        <p><?= $row['name'] ?></p>
                    </div>
                    <div class="info-row-bio">
                        <label for="bio">BIO</label>
                        <p><?= $row['bio'] ?></p>
                    </div>
                    <div class="info-row">
                        <label for="phone">PHONE</label>
                        <p><?= $row['phone'] ?></p>
                    </div>
                    <div class="info-row">
                        <label for="email">EMAIL</label>
                        <p><?= $row['email'] ?></p>
                    </div>
                    <div class="info-row">
                        <label for="password">PASSWORD</label>
                        <p><?= $row['password'] ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</body>

</html>