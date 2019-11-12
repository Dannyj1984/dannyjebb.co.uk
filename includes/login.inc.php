<?php

if(isset($_POST['login-submit'])) {
    //connect to database handler file
    require 'dbh.inc.php';
    
    $mailuid = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($mailuid) || empty($password)){
        header("Location: ../DJ_login.php?error=emptyfields");
        exit();
        
    } else {
        //Check the table for username or email
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../DJ_login.php?error=sqlerror");
            exit();
        } else {
            //check for either username or email.
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                //Check if user password and supplied password match
                $passwordCheck = password_verify($password, $row['password']);
                if($passwordCheck == false){
                    header("Location: ../DJ_login.php?error=wrong password");
                    exit();
                } else if ($passwordCheck == true){
                    //start a session for the logged in user.
                    session_start();
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['useruid'] = $row['username'];
                    header("Location: ../DJ_login.php?login=success");
                    exit();
                } else {
                    header("Location: ../DJ_login.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../DJ_login.php?error=nouser");
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}