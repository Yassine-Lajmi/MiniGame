<?php
    include 'connect.php';

    function loginUser($email){
        session_start();
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
    }

    if(isset($_POST['signUp'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)){
            $password = md5($password);
            $checkEmail = mysqli_query($con,"SELECT * FROM `minigame` WHERE email = '$email'");
            if(mysqli_num_rows($checkEmail) > 0){
                $message = "Email Address Already Exists";
            }else{
                $insert = mysqli_query($con, "INSERT INTO `minigame` VALUES (0, '$firstName', '$lastName', '$email', '$password', 10)");
                if($insert){
                    loginUser($email);
                }
            }
        }else{
            $message = "Please fill out the entire form!";
        }
    }

    if(isset($_POST['signIn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        if(!empty($email) && !empty($password)){
            $check = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email' AND passw = '$password'");
            if( mysqli_num_rows($check)>0){
                $row = mysqli_fetch_assoc($check);
                $userEmail = $row['email'];
                loginUser ($userEmail);
            }else{
                $message = "Incorrect Email or Password!";
            }
        }else{
            $message = "Please fill out the entire form!";
        }
    }
?>