<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="../../static/css/login_form.css"/>
    </head>
    <body>
        <div class="abc1">
            <div class="ab1">
                <p class="logo"><b>S</b><span STYLE="color: blue; font-size: 40px">ocialite</span></p>
            </div>
            <div class="ab2">
                <p class="para1"><b>Existing</br>User</br>Log-in</b></p>
            </div>
            <div class="ab3">
                <p class="tag"><a href="/social_media/index.php/login/register" class="a1">New User Create Account</a></p>
            </div>
        </div>
        <div class="abc2">
            <form id="login_form" method="post" action="login_submit.php" class="abcd">
                
                <h1 STYLE="font-size: 40px">Log-in</h1>
                
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
                        <p></p>
                    </div>
                    <div class="ghi">
                        <input id="but" class="b" type="submit" name="submit" value="Log-in"/>
                    </div>  
                </div>
                <div class="def">
                    <div class="ghi1">
                        <p></p>
                    </div>
                    <div class="ghi">
                        <a href="/social_media/index.php/login/register" class="a2">New User Create Account</a>
                    </div>  
                </div>
            </form>
        </div>
        <script type="text/javascript" src="../../static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../../static/js/login.js"></script>
    </body>
</html>
