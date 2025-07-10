<?php
    include 'connect.php';
    session_start();
    
/*function reload($con, $email){
    $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
    while($row = mysqli_fetch_array($query)){
        $identity = $row['firstname'].' '.$row['lastname'];
        $score = $row['score'];
    }
}*/

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $identity = $row['firstname'].' '.$row['lastname'];
        $score = $row['score'];
        }
        //reload($con, $email);
    }

    if(isset($_POST['score'])){
        $quizScore = intval($_POST['score']);
        //$score = $score - 2;
        $changeScore = mysqli_query($con, "UPDATE `minigame` SET score = score + $quizScore -2 WHERE email = '$email'");
        //reload($con, $email);
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        //$identity = $row['firstname'].' '.$row['lastname'];
        $score = $row['score'];
        }
    }

    if(isset($_GET['MiniQuizPlayButton'])){
        if($score >= 2){
            header("Location: MiniQuiz/MiniQuiz.php");
        }else{
            $message= "You don't have enough coins!";
        }
    }
?> 