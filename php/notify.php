<?php
    session_start();
    include_once "config.php";
    include_once "config2.php";
    $output ='';
    $sql1 = mysqli_query($conn ,"SELECT * FROM notice");
    while($row1 = mysqli_fetch_assoc($sql1)){
        $output .='<div class="form notify"><p>From : '. $row2['fname'].''. $row2['lname'].'</p>To : '.$row1['towhom'].'<br>Message : '. $row1['message'].'<br><br>'.date("Y/m/d").'</div>';
    }
    echo "<br> <p class = 'noty'>No more new notifications</p> <br> $output";
?>