<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="/social_media/css/register_form.css"/>
    </head>
    <body>
        <div class="abc1">
            <p class="logo"><b>S</b><span STYLE="color: blue; font-size: 25px">ocialite</span></p>
            <p class="para1"><b>New User Create Account</b></p>
            <a href="login_form.php" class="a1">Existing User Log-in</a>
        </div>
        <div class="abc2">
            <form method="post" action="register_submit.php" class="abcd">
                
                <h1>Create Account</h1>
                
                <div class="def">
                    <div class="ghi1">
                        <p>Name</p>
                    </div>
                    <div class="ghi test">
                        <input class="input-name" type="text" name="name"/>
                    </div>
                </div>
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
                <div class="def">
                    <div class="ghi1">
                        <p>Confirm Password</p>
                    </div>
                    <div class="ghi">
                        <input class="input-password" type="password" name="confirm_password"/>
                    </div>
                </div>
                
                <input class="button" type="submit" name="submit" value="Create Account"/>
                <p><a href="login_form.php" class="a2">Existing User Log-in</a></p>

            </form>
        </div>
        <script type="text/javascript" src="js/register_form.js"></script>
    </body>
</html>
