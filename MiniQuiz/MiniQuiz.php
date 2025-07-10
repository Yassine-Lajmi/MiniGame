<?php
    //include 'MiniQuizBE.php';
    /*include '../connect.php';

    $questionsGet = mysqli_query($con, "SELECT * FROM `miniquizquestions`");
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

    echo json_encode($questions);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniQuiz</title>
    <link rel="stylesheet" href="styleMiniQuiz.css">
</head>
<body>
    <div id="quizContainer">
        <script src="script.js"></script>
    </div>
</body>
</html>