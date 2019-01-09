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
        $id=$_SESSION['user_id']; //echo $id; 
        $college=$_POST['college']; //echo $college;
        $phone_no=$_POST['phone_no']; //echo $phone_no;
   
        $sql = "SELECT * FROM users WHERE user_id=$id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
     
        while ($row=mysqli_fetch_array($result)) {
            $name= $row['name']; $email=$row['email']; $password= $row['password']; $college= $row['college'];  $phone_no =$row['phone_no'];
        }    	

        mysqli_close($conn);
    } 
?>


<html>
    <head>
        <link rel ="stylesheet" href="css/dashboard2.css">
    </head>
    <body>
        <div class="bound">
            <div class="main1">
                <div class="child1">
                    <div class="img">
                        <img src="sample.png" width="180" height="100">
                    </div>
                </div>
                <div class ="child1">
                    <div class="upper1">My Dashboard
                    </div>
                </div>
                <div class ="child1">
                    <div class="upper1">
                        <a href="login_form.php" >LogOut</a>
                    </div>
                </div>
            </div>
            <div class="main2">
                <div class="child21">
                    <div class="box1">My Account Details 
                    </div>
                </div>
                <div class="account">
                    <form method="post" id="dashboard2" action="dashboard_submit.php">
                        <div class="child22">
                            Name
                        </div>
                        <div class="child23">
                            <input type="text" name="name" class="name" value="<?php echo $name; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            E-mail
                        </div>
                        <div class="child23">
                            <input type="text" name="email" class="name" value="<?php echo $email; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            Password
                        </div>
                        <div class="child23">
                            <input type="text" name="password" class="name" value="<?php echo $password; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            College
                        </div>
                        <div class="child23">
                            <input type="text" name="college" class="name" value="<?php echo $college; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            Phone_no
                        </div>
                        <div class="child23">
                            <input type="text" name="phone_no" class="name" value="<?php echo $phone_no; ?>" /></br></br>
                        </div>
                        <div class="child24">
                            <input type="submit" name="update" class="update" value="update"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="main3">
                <div class="child31">
                  <div class="box1">My post
                  </div>  
                </div>
                <div class="post">
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
         <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
         <script type="text/javascript" src="js/dashboard.js"></script>
    </body>
</html>
