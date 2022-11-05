<?php
    session_start();
    include_once 'config.php';
    $to_ = mysqli_real_escape_string($conn , $_POST['towhom']);
    $message = mysqli_real_escape_string($conn , $_POST['message']);
    $root = $_SESSION['unique_id'];
    if (!empty($to_) && !empty($message)){
        $acc = mysqli_query($conn , "SELECT * FROM users WHERE unique_id = {$root}");
        if ($acc){
            $row1 = mysqli_fetch_assoc($acc);
        }
        $sql2 = mysqli_query($conn , "INSERT INTO notice( email ,towhom, message) VALUES('{$row1['email']}','{$to_}','{$message}')");
        if ($sql2){
            echo "done";
        }else{
            echo "error";
        }
    }else{
        echo "Please fill all field given!";
    }