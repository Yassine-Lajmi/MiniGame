<?php
    include 'connect.php';
    session_start();
 
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $identity = $row['firstname'].' '.$row['lastname'];
        $score = $row['score'];
        }
    }else{
        header("Location: error.php");
    }

    if(isset($_POST['score'])){
        $quizScore = intval($_POST['score']);
        $changeScore = mysqli_query($con, "UPDATE `minigame` SET score = score + $quizScore -2 WHERE email = '$email'");
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $score = $row['score'];
        }
    }
?> 