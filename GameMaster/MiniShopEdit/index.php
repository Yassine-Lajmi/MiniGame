<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop GameMaster Section</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="indexHeader">
        <h1>MiniShop GameMaster Section</h1>
    </header>
    <div class="body">
        <div class="head">
            <a href="../GMhomepage.php"><img src="../Pics/backBtn.png" alt="Back" height="30px" width="30px"></a>
            <h2 class="title">List of Items</h2>
            <a href="addItem.php"><img src="../Pics/addButton.png" alt="AddBtn" height="30px" width="30px"></a>
        </div>
        <div class="message"><?php if(isset($message)){echo $message;} ?></div>
        <div class="itemsContainer">
            <!--<div class="item">
                <img class="itemImg" src="../../Pics/cookie.png" alt="itemPic" height="30px" width="30px">
                <h3 class="itemName">Cookie</h3>
                <p class="cost">Cost: 2<img src="../../Pics/coin.png" alt="MiniCoin" height="30px" width="30px"></p>
                <p class="effect">Effect: 2<img src="../../Pics/cookie.png" alt="MiniCookie" height="30px" width="30px"></p>
                <div class="action">
                    <a href="editProduct.php?id='.$row['id'].'"><img src="../Pics/editButton.png" alt="Edit product" height="40px" width="40px"></a>
                    <form method="post" action=""><input type="hidden" name="deleteId" value="'.$row['id'].'"><button name="deleteBtn"><img src="../Pics/deleteButton.png" alt="Delete product" height="40px" width="40px"></button></form>
                </div>
            </div>-->
            <?php include 'itemList.php'; ?>
        </div>
    </div>
</body>
</html>