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
            <?php include 'itemList.php'; ?>
        </div>
    </div>
    <script src="MSscript.js"></script>
</body>
</html>