<?php
    session_start();    
    
    $hostname="localhost";
    $username="root";
    $db_password="supriya1234";
    $db_name="social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    if ($row=mysqli_fetch_array($result)) {
        //echo "Hello"."<br/>";
        echo $row['name'] ."<br/>";
        $_SESSION['user_id']=$row['user_id'];
        //$_SESSION['name']=$row['name'];
        //setcookie("id",$row['id'],3600,"/");
        //setcookie("name",$row['name'],3600,"/");
        ?>
    
        <a href="dashboard2.php">My Dashboard</a>
        
        <!--<a href="dashboard.php? name=<?php echo $row['name'];?>">Click here to Continue</a>
        <form action="dashboard.php" method="get">
            <input type="hidden" name="name" value="<?php echo $row['name']?>"/>
            <input type="submit" value="click here"/>
        </form>-->
        <?php
    }
    else{
        echo "login Failed";
    }   	

    mysqli_close($conn);
?>
