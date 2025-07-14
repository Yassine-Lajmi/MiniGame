<?php
    include 'connect.php';
    session_start();
    $email = $_SESSION['email'];

    if(isset($_POST['MQscore'])){
        $quizScore = intval($_POST['MQscore']);
        $changeScore = mysqli_query($con, "UPDATE `users` SET score = score + $quizScore, cookies = cookies - 2 WHERE email = '$email'");
    }
?> 