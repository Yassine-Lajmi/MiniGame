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
            <button id="nextButton" class="nextBtn">Next</button>
        </div>
        <form style="display: none;" id="scoreForm" action="../homepage.php" method="post">
            <input type="hidden" name="MQscore" id="scoreInput">
            <button>Back to Homepage</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>