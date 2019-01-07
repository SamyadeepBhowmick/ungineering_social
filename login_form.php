<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="login_form.css"/>
    </head>
    <body>
        <div class="abc1">
            <p class="logo"><b>S</b><span STYLE="color: blue; font-size: 25px">ocialite</span></p>
            <p class="para1"><b>Existing User Log-in</b></p>
            <a href="register_form.php" class="a1">New User Create Account</a>
        </div>
        <div class="abc2">
            <form method="post" action="login_submit.php" class="abcd">
                
                <h1>Log-in</h1>
                
                <div class="def">
                    <div class="ghi1">
                        <p>Email</p>
                    </div>
                    <div class="ghi">
                        <input class="input-email" type="email" name="email"/>
                    </div>
                </div>
                <div class="def">
                    <div class="ghi1">
                        <p>Password</p>
                    </div>
                    <div class="ghi">
                        <input class="input-password" type="password" name="password"/>
                    </div>
                </div>
                
                <input class="b" type="submit" name="submit" value="Log-in"/>
                <p><a href="register_form.php" class="a2">New User Create Account</a></p>

            </form>
        </div>
        <script type="text/javascript" src="js/login_form.js"></script>
    </body>
</html>
