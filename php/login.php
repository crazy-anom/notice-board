<?php
    session_start();
    include_once 'config.php';
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $pass = mysqli_real_escape_string($conn , $_POST['pass']);
    if (!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn , "SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
        if(mysqli_num_rows($sql)>0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        }else{
            echo "please check your email and password";;
        }
    }else{
        echo "Please fill your Account details";;
    }
?>