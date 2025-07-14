<?php 
    include '../connect.php';

    $get = mysqli_query($con, "SELECT * FROM `food`");
    if(mysqli_num_rows($get) == 0){
        echo '<div class="message">No Items yet</div>';
    }else{
        while($row = mysqli_fetch_assoc($get)){
            echo '
            <div class="item">
                <img class="itemImg" src="foodPics/'.$row['foodpic'].'" alt="itemPic">
                <h3 class="itemName">'.$row['foodname'].'</h3>
                <p class="cost">Cost: '.$row['foodprice'].'<img src="../Pics/coin.png" alt="MiniCoin"></p>
                <p class="effect">Effect: '.$row['foodeffect'].'<img src="../Pics/cookie.png" alt="MiniCookie"></p>
                <button class="buyBtn">Buy</button>
            </div>
            ';
        }
    }
?>