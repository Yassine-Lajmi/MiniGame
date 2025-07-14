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
            <div class="text">
                <h1>Welcome To MiniGame!</h1>
                <p>The best platform for relaxing and playing your favorite minigames</p>
            </div>
            <img src="Pics/homepageDeco1.png" alt="MiniGame Controller" class="deco1">
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
</html>