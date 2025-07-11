<?php
    include 'connect.php';
    session_start();

    header('Content-Type: application/json');

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $score = $row['score'];
        echo json_encode($score);
        }
    }else{
        echo'<script>alert("getScore error");</script>';
    }
?>