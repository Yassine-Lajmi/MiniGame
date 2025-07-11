<?php
    /*session_start();*/
    include 'MiniShopBE.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
    <link rel="stylesheet" href="MSstyle.css">
</head>
<body>
    <header class="MSHead">
        <h1>MiniShop</h1>
        <div class="userInfo">
            <div class="identity">
                <img src="../Pics/profile.jpg" alt="Profile Picture">
                <h2><?php if(isset($identity)){echo $identity;}?></h2>
            </div>
            <div class="scoreBar">
                <div class="score" id="score">
                    <?php if(isset($score)){echo $score;} ?>
                </div>
                <img src="../Pics/coin.png" alt="MiniCoin">
            </div>
        </div>
        <a href="../homepage.php">Back To Homepage</a>
    </header>
    <div class="category">
        <div class="title">
            <h2>Food</h2>
            <div class="cookieBar">
                <div class="cookies" id="cookies">
                    <?php if(isset($cookies)){echo $cookies;} ?>
                </div>
                <img src="../Pics/cookie.png" alt="MiniCookie">
            </div>
        </div>
        <div class="itemsContainer">
            <div class="item">
                <img class="itemImg" src="../Pics/cookie.png" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 1<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 1<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="../Pics/cookie.png" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 1<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 1<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="../Pics/cookie.png" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 1<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 1<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="../Pics/cookie.png" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 1<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 1<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="../Pics/cookie.png" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 1<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 1<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
        </div>
    </div>
    <script src="MSscript.js"></script>
</body>
</html>