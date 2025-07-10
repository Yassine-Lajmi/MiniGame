<?php
    include '../connect.php';

    header('Content-Type: application/json');

    $questionsGet = mysqli_query($con, "SELECT * FROM `miniquizquestions` ORDER BY RAND() LIMIT 4");
    $questions = [];

    while($q = mysqli_fetch_assoc($questionsGet)){
        $q_id = $q['questionid'];
        $answersGet = mysqli_query($con, "SELECT * FROM `miniquizanswers` WHERE questid = $q_id");

        $answers = [];
        while($a = mysqli_fetch_assoc($answersGet)){
            $answers[] = $a;
        }

        $q['answers'] = $answers;
        $questions[] = $q;
    }

    echo json_encode($questions);
?>