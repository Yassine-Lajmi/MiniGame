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
                <h2 id="identity"></h2>
            </div>
            <div class="scoreBar">
                <div class="score" id="score"></div>
                <img src="../Pics/coin.png" alt="MiniCoin">
            </div>
        </div>
        <a href="../homepage.php">Back To Homepage</a>
    </header>
    <div class="category">
        <div class="title">
            <h2>Food</h2>
            <div class="cookieBar">
                <div class="cookies" id="cookies"></div>
                <img src="../Pics/cookie.png" alt="MiniCookie">
            </div>
        </div>
        <div class="itemsContainer">
            <div class="item">
                <img class="itemImg" src="foodPics/cookie.webp" alt="itemPic">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 2<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 2<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="foodPics/apple.webp" alt="itemPic">
                <h3 class="itemName">Apple</h3>
                <p class="cost">Cost: 3<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 4<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="foodPics/bread.webp" alt="itemPic">
                <h3 class="itemName">Bread</h3>
                <p class="cost">Cost: 4<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 5<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="foodPics/steak.webp" alt="itemPic">
                <h3 class="itemName">Steak</h3>
                <p class="cost">Cost: 6<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 8<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="foodPics/baked-potato.webp" alt="itemPic">
                <h3 class="itemName">Baked Potato</h3>
                <p class="cost">Cost: 4<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 5<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            <div class="item">
                <img class="itemImg" src="foodPics/cooked-cod.webp" alt="itemPic">
                <h3 class="itemName">Cooked Cod</h3>
                <p class="cost">Cost: 4<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: 5<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
        </div>
    </div>
    <script src="MSscript.js"></script>
</body>
</html>