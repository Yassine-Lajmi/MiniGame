<?php 
    include '../connect.php';
    session_start();

    if(isset($_POST['BuyBtn'])){
        $isToBuy = $_POST['ItemId'];
        $getItem = mysqli_query($con, "SELECT * FROM `food` WHERE id = '$isToBuy'");
        $itemRow = mysqli_fetch_assoc($getItem);
        $item = $itemRow['id'];
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $getBuyer = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email'");                
            if(mysqli_num_rows($getBuyer) > 0){
                $buyerRow = mysqli_fetch_assoc($getBuyer);
                $buyer = $buyerRow['id'];
                if($buyerRow['score'] >= $itemRow['foodprice']){
                    //insert purchase in DB
                    $datetime = date("Y-m-d H:i:s");
                    $purchase = mysqli_query($con, "INSERT INTO `purshases` VALUES (0,'$buyer','$item','$datetime')");
                    //Change user's stat
                    $itemPrice = $itemRow['foodprice'];
                    $itemEffect = $itemRow['foodeffect'];
                    $newScore = $buyerRow['score'] - $itemPrice;
                    $newCookies = $buyerRow['cookies'] + $itemEffect; 
                    $change = mysqli_query($con, "UPDATE `users` SET score = '$newScore', cookies = '$newCookies' WHERE id = '$buyer'");
                    if($change){
                        $message = "Purchase made successfully!";
                    }else{
                        $message = "No Purchase Made!";
                    }
                }else{
                    $message = "You don't have enough coins!";
                }
            }else{
                $message = "User not found in database";
            }
        }else{
            header("Location: ../error.php");
        }
    }

    $list = "";
    $get = mysqli_query($con, "SELECT * FROM `food`");
    if(mysqli_num_rows($get) == 0){
        $message = "No Items yet!";
    }else{
        while($row = mysqli_fetch_assoc($get)){
            $list = $list . '
            <div class="item">
                <img class="itemImg" src="foodPics/'.$row['foodpic'].'" alt="itemPic">
                <h3 class="itemName">'.$row['foodname'].'</h3>
                <p class="cost">Cost: '.$row['foodprice'].'<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: '.$row['foodeffect'].'<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <form action="#" method="post">
                    <input type="hidden" name="ItemId" value="'.$row['id'].'">
                    <button class="buyBtn" name="BuyBtn">Buy</button>
                </form>
            </div>
            ';
        }
    }
?>