<?php
    $root = $_SESSION['unique_id'];
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection ,"noticeboard");
    $query = mysqli_query( $connection ,"select * from users");
    $row2 = mysqli_fetch_assoc($query);
?>