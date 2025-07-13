<?php
    include 'backend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop GameMaster Section > Add an Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="addItemHeader">
        <h1>MiniShop GameMaster Section</h1>
    </header>
    <div class="body">
        <div class="head">
            <h2 class="title">Add an Item</h2>
        </div>
        <form class="addForm" action="" method="post" enctype="multipart/form-data">
            <div class="message"><?php if(isset($message)){echo $message;} ?></div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Item's name" required>
            <label for="price">Cost</label>
            <div class="inputBox">
                <input type="text" id="price" name="price" placeholder="Item's cost" required>      
                <img src="../../Pics/coin.png" alt="">
            </div>
            <label for="effect">Effect</label>
            <div class="inputBox">
                <input type="text" id="effect" name="effect" placeholder="Item's effect" required>
                <img src="../../Pics/cookie.png" alt="">
            </div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image" placeholder="Item's image" required>
            <div class="action">
                <button name="addBtn">Add</button>
                <a href="index.php">Cancel</a>
            </div>
        </form>
        </div>
    </div>
</body>
</html>