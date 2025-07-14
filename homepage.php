<?php include 'hpbackend.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniGame Home Page</title>
    <link rel="stylesheet" href="homepagestyle.css">
</head>
<body>
    <div class="sideBar">
        <div class="profileSection">
            <div class="identity">
                <img src="Pics/profile.jpg" alt="Profile Picture">
                <h2 id="identity"></h2>
            </div>
            <div class="ressources">
                <div class="bar">
                    <div class="number" id="score"></div>
                    <img src="Pics/coin.png" alt="MiniCoin">
                </div>
                <div class="bar">
                    <div class="number" id="cookies"></div>
                    <img src="Pics/cookie.png" alt="MiniCookie">
                </div>
            </div>
        </div>
        <div class="action">
            <a href="">> User Activity</a>
            <a href="">> Edit Profile</a>
            <a href="">> Admin Section</a>
            <a href="logout.php">> Log Out</a>
        </div>
    </div>
    <div class="body">
        <div class="logo">
            <img src="Pics/MiniGame-Logo.png" alt="MiniGame Logo">
            <h1>MiniGame</h1>
        </div>
        <div class="intro">
            <h1>Welcome To MiniGame!</h1>
            <p>The best platform for relaxing and playing your favorite minigames</p>
        </div>
        <div class="activities">
            <h2 class="title">> Activities</h2>
            <div class="container">
                <a href="MiniShop/MSindex.php" class="card" id="MiniShop">
                    <h3>MiniShop</h3>
                    <p>Buy items and accessories!</p>
                </a>
                <a href="MiniQuiz/MiniQuiz.php" class="card" id="MiniQuiz">
                    <h3>MiniQuiz</h3>
                    <p>Solve some questions to win coins!</p>
                    <div class="cost">Cost : 2<img src="Pics/cookie.png" alt="MiniCoin" height="20px" width="20px"></div>
                </a>
                <a href="MiniQuiz/MiniQuiz.php" class="card" id="MiniQuiz">
                    <h3>MiniQuiz(Cheat)</h3>
                    <p>Solve some questions to win coins!</p>
                    <div class="cost">Cost : 2<img src="Pics/cookie.png" alt="MiniCoin" height="20px" width="20px"></div>
                </a>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
<!--<body class="homePage">
    <header class="homePageHead">
        <div class="userInfo">
            <div class="identity">
                <img src="Pics/profile.jpg" alt="Profile Picture">
                <h2 id="identity"></h2>
            </div>
            <div class="scoreBar">
                <div class="score" id="score"></div>
                <img src="Pics/coin.png" alt="MiniCoin">
            </div>
        </div>
        <h1>MiniGame</h1>
        <a href="logout.php">Log out</a>
    </header>
    <table class="activities">
        <thead>
            <th colspan="3">
                <div class="actContainer">
                <h3>Activities</h3>
                <div class="cookieBar">
                    <div class="cookies" id="cookies"></div>
                    <img src="Pics/cookie.png" alt="MiniCookie">
                </div>
                </div>
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="name">
                    <h3>MiniQuiz(Cheat)</h3>
                    <p>Solve some questions to win coins!</p>
                </td>
                <td class="cost">Cost: 2<img src="Pics/cookie.png" alt="MiniCoin" height="20px" width="20px"></td>
                <td class="Btn"><a href="MiniQuiz/MiniQuiz.php">Play</a></td>
            </tr>
            <tr>
                <td class="name">
                    <h3>MiniQuiz</h3>
                    <p>Solve some questions to win coins!</p>
                </td>
                <td class="cost">Cost: 2<img src="Pics/cookie.png" alt="MiniCoin" height="20px" width="20px"></td>
                <td class="Btn">
                    <button id="MiniQuizPlayButton">Play</button>
                </td>
            </tr>
            <tr>
                <td class="name">
                    <h3>MiniShop</h3>
                    <p>Buy items and accessories!</p>
                </td>
                <td class="cost"></td>
                <td class="Btn">
                    <a href="MiniShop/MSindex.php">Play</a>
                </td>
            </tr>
        </tbody>
    </table>
    <script src="script.js"></script>
</body>-->
</html>