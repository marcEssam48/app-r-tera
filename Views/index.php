<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">   
</head>
<header>
    <figure class="logo"><img src="../img/t.png" alt="library" height="80" width="180"></figure>
</header>
    <body>
        <div class="login-box">
            <!-- <img src="logo_final_orange.png" class="avatar"> -->
            <h1>Login</h1>
            <form action="../Controllers/login_controller.php" method="post">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <label>National ID/Passport</label>
                <input type="text" name="nationalID" placeholder="Enter Your National ID" required>
                <button class="button1" type="submit" name="login" value="Login"> Login </button>
            </form>       
        </div>
    
    </body>
</html>