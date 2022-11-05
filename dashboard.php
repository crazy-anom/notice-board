<?php
    session_start();
    if (!isset($_SESSION['unique_id'])){
        header("location: ./login.php");
    }
?>
<?php
    include_once "header.php"
?>
<body>
    <header>
        <nav>
            <div class="title">Notifier</div>
            <?php
            include_once "./php/config.php";
            $sql = mysqli_query($conn ,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($sql)>0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
        </nav>
    </header>
    <marquee behavior="" direction="">Developed by P Gowdaman , I Jahangeer , S Deepath , K Hariharan , I Antony dass from 2nd year cse</marquee>
    <section class="wapper">
        <form class="form" action="#">
            <h1 class="header-title">Add Notice</h1>
            <div class="errortext" style = "padding:10px 12px ;color: white; background-color: lightcoral;border-radius: 5px; box-shadow: 0 0 2px;display: none;"></div>
            <div class="field">
                <p for="From">User :</p>
                <label style = "color:white;"> <? echo "$row[fname] $row[lname]"?></label>
             </div>
             <div class="field">
                <label for="towhom">To</label>
                <input name="towhom" id="towhom">
             </div>
             <div class="field text">
                 <label for="notice-text">Notice</label>
                 <textarea name="message" id="" cols="30" rows="10" placeholder="Enter details to be notified"></textarea> 
            </div>
            <div class="field">
                <input style = "cursor:pointer;" class="add" id = "add" type="button" value="Add"> 
           </div>
           <p class="link">Do you want to see the notice?<a href="./index"> Notify</a></p>
           <div class="bg"></div> 
        </form>
        <script src="./javascript/dashboard.js"></script>
    </section>
</body>
</html>