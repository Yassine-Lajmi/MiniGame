<?php 
    include '../../connect.php';

    if(isset($_POST['deleteBtn'])){
        $isToDelete = $_POST['deleteId'];
        $getImg = mysqli_query($con, "SELECT `foodpic` FROM `food` WHERE id = $isToDelete");
        $row = mysqli_fetch_assoc($getImg);
        $image = $row['foodpic'];
        $image_path = "../../MiniShop/foodPics/" . $image;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $delete = mysqli_query($con, "DELETE FROM `food` WHERE id = '$isToDelete'");
        if($delete){
            echo '<div class="message">Item successfully deleted!</div>';
        }else{
            echo '<div class="message">Item not deleted!</div>';
        }
    }

    $get = mysqli_query($con, "SELECT * FROM `food`");
    if(mysqli_num_rows($get) == 0){
        echo '<div class="message">No Items yet</div>';
    }else{
        while($row = mysqli_fetch_assoc($get)){
            echo '
            <div class="item">
                <img class="itemImg" src="../../MiniShop/foodPics/'.$row['foodpic'].'" alt="itemPic" height="30px" width="30px">
                <h3 class="itemName">'.$row['foodname'].'</h3>
                <p class="cost">Cost: '.$row['foodprice'].'<img src="../../Pics/coin.png" alt="MiniCoin" height="30px" width="30px"></p>
                <p class="effect">Effect: '.$row['foodeffect'].'<img src="../../Pics/cookie.png" alt="MiniCookie" height="30px" width="30px"></p>
                <div class="action">
                    <a href="editItem.php?id='.$row['id'].'"><img src="../Pics/editButton.png" alt="Edit product" height="40px" width="40px"></a>
                    <form method="post" action=""><input type="hidden" name="deleteId" value="'.$row['id'].'"><button name="deleteBtn"><img src="../Pics/deleteButton.png" alt="Delete Item" height="40px" width="40px"></button></form>
                </div>
            </div>
            ';
        }
    }

    /*$get = mysqli_query($con, "SELECT image FROM food WHERE id = $id");
    if (mysqli_num_rows($get) > 0) {
        $row = mysqli_fetch_assoc($get);
        $image = $row['image'];
        $image_path = "../../MiniShop/foodPics/" . $image;

        // Step 2: Delete the image file if it exists
        if (file_exists($image_path)) {
            unlink($image_path); // Delete image from folder
        }*/
?>