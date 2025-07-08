<?php
    include 'connect.php';

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
                //echo "Email Address Already Exists";
            }else{
                $insert = mysqli_query($con, "INSERT INTO `minigame` VALUES (0, '$firstName', '$lastName', '$email', '$password')");
                if($insert){
                    //$message = "Account successfully created!";
                    //echo "Account successfully created!";
                    header("Location: homepage.php");
                }
            }
        }else{
            $message = "Please fill out the entire form!";
            //echo "Please fill out the entire form!";
        }
    }

    if(isset($_POST['signIn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $check = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email' AND passw = '$password'");
        if( mysqli_num_rows($check)>0){
            session_start();
            $row = mysqli_fetch_assoc($check);
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        }else{
            $message = "Incorrect Email or Password!";
        }
    }

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM `minigame` WHERE email = '$email'");                
        while($row = mysqli_fetch_array($query)){
        $message = $row['firstname'].' '.$row['lastname'];
        }
    }
?>