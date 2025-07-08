<?php
    session_start();
    include 'connect.php';
    include 'register.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello World</h1>
    <a href="logout.php">Log out</a>
    <p>Hello
        <div class="message"><?php if(isset($message)){echo $message;}?></div>
    </p>
</body>
</html>