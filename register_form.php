<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="css/register_form.css"/>
    </head>
    <body>
        <div class="abc1">
            <div class="ab1">
                <p class="logo"><b>S</b><span STYLE="color: blue; font-size: 40px">ocialite</span></p>
            </div>
            <div class="ab2">
                <p class="para1"><b>New User</br>Create</br>Account</b></p>
            </div>
            <div class="ab3">
                <p class="tag"><a href="login_form.php" class="a1">Existing User Log-in</a></p>
            </div>
        </div>
        <div class="abc2">
            <form id="register_form" method="post" action="register_submit.php" class="abcd">
                
                <h1 STYLE="font-size: 40px">Create Account</h1>
                
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
                <div class="def">
                    <div class="ghi1">
                        <p></p>
                    </div>
                    <div class="ghi">
                        <input class="button" type="submit" name="submit" value="Create Account"/>
                    </div>  
                </div>
                <div class="def">
                    <div class="ghi1">
                        <p></p>
                    </div>
                    <div class="ghi">
                        <a href="login_form.php" class="a2">Existing User Log-in</a>
                    </div>  
                </div>
                       
            </form>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>
