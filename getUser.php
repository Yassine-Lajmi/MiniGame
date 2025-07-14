<?php
include "connect.php";
session_start();

if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email'");                
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            header('Content-Type: application/json');
            echo json_encode($row);
        }else{
            echo json_encode(["error" => "User not found in database"]);
        }
    }else{
        header("Location: ../error.php");
    }
?>