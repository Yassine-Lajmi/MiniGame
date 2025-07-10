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
    <div class="app">
        <h1>MiniQuiz</h1>
        <div id="quizContainer">
            <h2 id="question">Question here</h2>
            <div id="answerButtons">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
            <button id="nextButton">Next</button>
        </div>
        <form style="display: none;" id="scoreForm" action="../homepage.php" method="post">
            <input type="hidden" name="score" id="scoreInput">
            <button>Back to Homepage</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>