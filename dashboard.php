<html>
    <head>
        <link rel ="stylesheet" href="css/dashboard.css">
    </head>
    <body class="bound">
        <div class="img">
            <img src="sample.png" width="180" height="100">
        </div>
        <div class="upper1">My Dashboard
        </div>
        <a href="login_form.php" class="upper2" align="center">LogOut</a>
        <div class="main1">
            <div class="heading">
                <div class="box1">My Account Details 
                </div>
                <div class="box2">Name
                </div>
                <div class="box3">
                    <?php  
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM users WHERE user_id=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                         
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['name'];
                            }    	

                            mysqli_close($conn);
                        }
                    ?>
                </div>
                <div class="box2">Email
                </div>
                 <div class="box3">
                    <?php  
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM users WHERE user_id=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                         
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['email'];
                            }    	

                            mysqli_close($conn);
                        }
                    ?>
                </div>
                <div class="box2">Password
                </div>
                 <div class="box3">
                    <?php  
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM users WHERE user_id=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                         
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['password'];
                            }    	

                            mysqli_close($conn);
                        }
                    ?>
                </div>
                <div class="box2">College
                </div>
                 <div class="box3">
                   <?php
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM users WHERE user_id=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                            
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['college'];
                            }    	

                            mysqli_close($conn);
                        }            
                    ?>
                </div>&#10071
                <div class="box2">Phone Number
                </div>
                 <div class="box3">
                 <?php
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM users WHERE user_id=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                            
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['phone_no'];
                            }    	

                            mysqli_close($conn);
                        } 
                    ?> 
                </div>&#10071
                <a href="update.php" class="box4">Update</a>
            </div>
        </div>
        <div class="main2">
            <div class="heading">
                <div class="box1">My post
                </div>
                <div class="box21">
                <?php
                        session_start();  
                        if(isset($_SESSION['user_id'])) {
                            $id= $_SESSION['user_id'];
                
                            $hostname = "localhost";
                            $username = "root";
                            $db_password = "supriya1234";
                            $database = "social_media";
                            
                            $conn = mysqli_connect($hostname, $username, $db_password, $database);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                          
                            $sql = "SELECT * FROM statuss WHERE userid=$id";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($conn));
                            }
                            
                            while ($row=mysqli_fetch_array($result)) {
                                echo $row['date']. " " .$row['time']. " ". $row['status'];
                            }    	

                            mysqli_close($conn);
                        } 
                    ?> 
                </div>
            </div>
        </div>
    </body>
</html>



















    <!-- <div class="box21">
                    <div class="box22">Time:24:40Hrs IST Date:26dec:</div>
                    I am happy:-)
                </div>
                <div class="box21">
                    <div class="box22">Time:24:40Hrs IST Date:26dec:</div>
                    Kohli played very well in today's match. 
                </div>
                <div class="box21">
                    <div class="box22">Time:24:40Hrs IST Date:26dec:</div>
                    Happy New Year 2019:-)
                </div>-->

