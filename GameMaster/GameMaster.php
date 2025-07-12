<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameMaster Verification</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Welcome to MiniGame</h1>
    <div class="container" id="GameMasterContainer">
        <div class="titleGroup">
            <h2>Game Master Verification</h2>
            <p>Please fill out this form to access your account</p>
        </div>
        <div class="message" id="message"></div>
        <!--<form action="" method="post" class="formGroup">-->
            <div class="inputGroup">
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
                <button name="signIn" id="GameMasterVerifBtn">Sign In</button>
            </div>
        <!--</form>-->
        <div class="links">
            <p>Dont't have an account yet?</p>
            <a href="../signUp.php">Sign Up</a>
        </div>
        <a href="../index.php" class="GameMasterLink">Sign in as a player!</a>
    </div>
    <script src="script.js"></script>
</body>
</html>