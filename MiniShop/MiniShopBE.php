<?php
    include '../connect.php';
    session_start();
 
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $identity = $row['firstname'].' '.$row['lastname'];
        $score = $row['score'];
        $cookies = $row['cookies'];
        }
    }else{
        header("Location: error.php");
    }
?>