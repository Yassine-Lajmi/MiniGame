<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Master Homepage</title>
    <link rel="stylesheet" href="GMstyle.css">
</head>
<body>
    <header>
        <div class="userInfo">
            <div class="identity">
                <img src="../Pics/profile.jpg" alt="Profile Picture">
                <h2>Blue King</h2>
            </div>
        </div>
        <h1>MiniGame > GameMaster</h1>
        <a href="../index.php">Log out</a>
    </header>
    <div class="activities">
        <div class="title"><h2>Activities</h2></div>
        <div class="activity" id="minishop" role="button" tabindex="0">
            <img src="Pics/MiniShop-icon.jpg" alt="MiniShop Icon" class="icon">
            <div class="text">
                <h2>MiniShop</h2>
                <p>Add, edit or delete food from MiniShop.</p>
            </div>
            <a href="MiniShopEdit/index.php"><img src="Pics/nextBtn.png" alt="Go to MiniShop Edit Section"></a>
        </div>
        <div class="activity" id="profile" role="button" tabindex="0">
            <img src="Pics/profile-icon.png" alt="Profile Icon" class="icon">
            <div class="text">
                <h2>Profile</h2>
                <p>Add or delete profile pictures for users to have.</p>
            </div>
            <a href="ProfileEdit/index.php"><img src="Pics/nextBtn.png" alt="Go to Profile Edit Section"></a>
        </div>
        <div class="activity" id="miniquiz" role="button" tabindex="0">
            <img src="Pics/MiniQuiz-icon.jpg" alt="MiniQuiz Icon" class="icon">
            <div class="text">
                <h2>MiniQuiz</h2>
                <p>Add, edit or delete MiniQuiz questions and their answers.</p>
            </div>
            <a href="MiniQuizEdit/index.php"><img src="Pics/nextBtn.png" alt="Go to MiniQuiz Edit Section"></a>
        </div>
    </div>
</body>
</html>