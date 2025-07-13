<?php
    include '../../connect.php';

    if (isset($_POST['addBtn'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $effect = $_POST['effect'];
        if(!empty($name) && !empty($price) && !empty($effect)){
            $check = mysqli_query($con, "SELECT * FROM `food` WHERE foodname = '$name'");
            if(mysqli_num_rows($check) > 0){
                $message = "Item exists already!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $time = time();
                    $new_img_name = $time.$img_name;
                    $move_img = move_uploaded_file($tmp_name, "../../MiniShop/foodPics/".$new_img_name);
                    if($move_img){
                        $add = mysqli_query($con, "INSERT INTO `food` VALUES (0,'$name','$price','$effect','$new_img_name')");
                        if($add){
                            $message = "Item added successfully!";
                        }else{
                            $message = "Item not added!";
                        }
                    }
                }
            }
        }else{
            $message = "Please fill out the entire form!";
        }
    }
?>