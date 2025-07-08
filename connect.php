<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "minigame";
    $con = new mysqli($host ,$user, $pass, $db);
    if($con->connect_error){
        echo"Failed to connect DB ".$con->connect_error;
    }
?>