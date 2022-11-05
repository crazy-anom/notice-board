<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Notice Board</title>
</head>
<body>
    <header>
        <nav>
            <div class="title">Notifier</div>
        </nav>
    </header>
    <marquee behavior="" direction="">Developed by P Gowdaman , I Jahangeer , S Deepath , K Hariharan , I Antony dass from 2nd year cse</marquee>
    <section class="wapper">
        <form class="form" action="#">
            <h1 class="header-title">Create Account</h1>
            <p class="errorblock" id="errorblock"></p>
            <div class="name-box">
                <div class="field">
                   <label for="fname">First name</label>
                   <input type="text" id="fname" name = "fname" placeholder="First name"> 
                </div>
                <div class="field">
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name = "lname" placeholder="Last name"> 
                 </div>
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name = "email" placeholder="Enter your email"> 
             </div>
             <div class="field password">
                 <label for="password">Password</label>
                 <input type="password" name = "pass" placeholder="Create a new password"> 
                 <i class="fas fa-eye"></i>
            </div>
            <div class="field">
                <input class="create" type="button" value="Make Account" id = "signup"> 
           </div>
           <p class="link">Already I Have an Account?<a href="./login.php"> Login Now</a></p>
        <div class="bg"></div>
        </form>
    </section>
    <script src="./javascript/show-pass-hide.js"></script>
    <script src="./javascript/index.js"></script>
</body>
</html>