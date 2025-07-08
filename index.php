<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MiniGame Log-In</title>
</head>
<body>
    <h1>Welcome to MiniGame</h1>
    <div class="container" id="SignUpContainer" style="display: none;">
        <div class="titleGroup">
            <h2>Create an account</h2>
            <p>Please fill out this form to sign up for this app</p>
        </div>
        <div class="message">Veuillez remplir le form</div>
        <form action="" method="post" class="formGroup">
            <div class="inputGroup">
                <div class="inputField">
                    <label for="fName">First Name</label>
                    <input type="text" id="fName" placeholder="First Name">
                </div>
                <div class="inputField">
                    <label for="lName">Last Name</label>
                    <input type="text" id="lName" placeholder="Last Name">
                </div>
                <div class="inputField">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email">
                </div>
                <div class="inputField">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="submitButton">
                <button>Sign Up</button>
            </div>
        </form>
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <div class="container" id="SignInContainer" style="display: block;">
        <div class="titleGroup">
            <h2>Sign In</h2>
            <p>Please fill out this form to access your account</p>
        </div>
        <div class="message"></div>
        <form action="" method="post" class="formGroup">
            <div class="inputGroup">
                <div class="inputField">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email">
                </div>
                <div class="inputField">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="submitButton">
                <button>Sign In</button>
            </div>
        </form>
        <div class="links">
            <p>Dont't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>