<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Information</title>
    <link rel="stylesheet" href="./styles/changeInfo.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="./assets/devchallenges.svg" alt="Logo" class="logo">
            <div class="user-details">
                <img src="#" alt="User Img">
                <span class="user-name">Username</span>
                <div class="dropdown">
                    <span class="arrow">&#9660;</span>
                    <div class="dropdown-content">
                        <a class="myProfile" href="./personalInfo.php">
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

        <div class="back">
            <a href="./register.php">
                < Back</a>
        </div>

        <div class="content">

            <form action="linkAdd.php" method="POST">

                <div class="title1">
                    <h2>Change Info</h2>
                    <p>Changes will be reflected to every services</p>
                </div>

                <div class="photoContainer">
                    <label for="photo" name="photo">CHANGE PHOTO</label>
                </div>

                <div class="divContainer">
                    <div class="boxContainer">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name...">
                    </div>

                    <div class="boxContainerBio">
                        <label for="Bio">Bio</label>
                        <input class="text2" type="text" name="bio" id="bio" placeholder="Enter your bio...">
                    </div>

                    <div class="boxContainer">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone...">
                    </div>

                    <div class="boxContainer">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter your email...">
                    </div>

                    <div class="boxContainer">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password...">
                    </div>



                    <div class="button-container">
                        <a href="personalInfo.php"><button type="submit">Save</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>