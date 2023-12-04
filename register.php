<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Register Form</title>

</head>

<body>
    <div class="container">

        <div class="logo">
            <img src="./assets/devchallenges.svg" alt="Logo">
        </div>

        <h2>Login</h2>

        <form action="./link.php" method="post">
            <div class="img-email">
                <img src="./assets/Email.svg" alt="Img Sobre">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="img-pass">
                <img src="./assets/Password.svg" alt="Img pass">
                <input type="password" name="password" placeholder="Password">
            </div> <br> <!-- Salto de linea -->
            <button type="submit">Start coding now</button>
        </form>
        <br> <!-- Salto de linea -->


        <div class="zonaBaja">
            <div class="txt1">
                <h4>or continue with these social profiles</h4>
            </div>

            <div class="socialMedia">
                <!-- agregar iconos-->
                <img src="./assets/Google.svg" alt="gmail 1">
                <img src="./assets/Facebook.svg" alt="faceb 2">
                <img src="./assets/Twitter.svg" alt="twit 3">
                <img src="./assets/Gihub.svg" alt="git 4">
            </div>

            <div class="txt1">
                <h4>Don’t have an account yet? <a href="/changeInfo.php"> Register</a></h4>
            </div>

        </div>
    </div>
    <div class="foot">
        <h4>created by <span>OmarLane</span></h4>
        <h4>devChallenges.io</h4>
    </div>
</body>

</html>