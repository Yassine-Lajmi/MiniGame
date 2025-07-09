<?php
    session_start();
    include 'hpbackend.php';
    if(!isset($_SESSION['email'])){
        header("Location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="homePage">
    <header class="homePageHead">
        <div class="userInfo">
            <div class="identity">
                <img src="profilePics/smallishbeans.jpg" alt="Profile Picture">
                <h2><?php if(isset($identity)){echo $identity;}?></h2>
            </div>
            <div class="scoreBar">
                <div class="score">
                    <?php if(isset($score)){echo $score;} ?>
                </div>
                <img src="profilePics/coin.png" alt="MiniCoin">
            </div>
        </div>
        <h1>MiniGame</h1>
        <a href="logout.php">Log out</a>
    </header>
    <table class="activities">
        <thead>
            <th colspan="3">Activities</th>
        </thead>
        <tbody>
            <tr>
                <td class="name">
                    <h3>MiniQuiz</h3>
                    <p>Solve some questions to win coins!</p>
                </td>
                <td class="cost">Cost: 2<img src="profilePics/coin.png" alt="MiniCoin" height="20px" width="20px"></td>
                <td class="Btn"><a href="MiniQuiz.php">Play</a></td>
            </tr>
            <tr>
                <td class="name">
                    <h3>MiniQuiz</h3>
                    <p>Solve some questions to win coins!</p>
                </td>
                <td class="cost">Cost: 2<img src="profilePics/coin.png" alt="MiniCoin" height="20px" width="20px"></td>
                <td class="Btn"><a href="MiniQuiz.php">Play</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>