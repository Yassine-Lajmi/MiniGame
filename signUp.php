<?php
    include 'connect.php';
    include 'register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up for MiniGame!</title>
</head>
<body>
    <h1>Welcome to MiniGame</h1>
    <div class="container" id="SignUpContainer">
        <div class="titleGroup">
            <h2>Create an account</h2>
            <p>Please fill out this form to sign up for this app</p>
        </div>
        <div class="message"><?php if(isset($message)){echo $message;}?></div>
        <form action="" method="post" class="formGroup">
            <div class="inputGroup">
                <div class="inputField">
                    <label for="fName">First Name</label>
                    <input type="text" id="fName" placeholder="First Name" name="firstName" required>
                </div>
                <div class="inputField">
                    <label for="lName">Last Name</label>
                    <input type="text" id="lName" placeholder="Last Name" name="lastName" required>
                </div>
                <div class="inputField">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="inputField">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </div>
            </div>
            <div class="submitButton">
                <button name="signUp">Sign Up</button>
            </div>
        </form>
        <div class="links">
            <p>Already have an account?</p>
            <a href="index.php">Sign In</a>
        </div>
    </div>
</body>
</html>