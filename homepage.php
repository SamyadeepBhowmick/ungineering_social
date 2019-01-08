<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/homepage.css"/>
    </head> 
    <body>
        <div class="main">
            <div class="a">
                <div class="a1">
                    <img src="img/pic1.jpeg" width="310px"; height="90px";>
                    <a href="login_form.php"><button class="login" >Login</button>
                    <a href="register_form.php"><button class="new_user" >New user</button>
                </div>
            </div>
            <div class="b">
                <?php
                    if(isset($_SESSION['user_id'])){
                        //echo $_SESSION['user_id'];
                        $id= $_SESSION['user_id']; 
                    }

                    $hostname = "localhost";
                    $username = "root";
                    $db_password = "amansagar";
                    $db_name = "social_media";

                    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    } 
                    
                    //$sql = "SELECT * FROM statuss WHERE userid=$id";
                    $sql =  "SELECT 
                        statuss.status,statuss.date,statuss.time,users.name
                    FROM
                        statuss
                    INNER JOIN 
                        users
                    ON
                        statuss.userid=users.user_id
                    ORDER BY 
                        statuss.date,statuss.time DESC";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                    die("Error: " . $sql . "<br>" . mysqli_error($conn));
                    }
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="b1">
                    <p>
                        <h1 class="h1"><?php echo $row['name']; ?></h1>
                        <p><?php echo $row['status']; ?></p>
                        <p class="bb"><?php echo $row['date'] ?><?php echo $row['time'] ?></p>
                    </p>
                </div>    	
                <?php
                    }
                    mysqli_close($conn);
                ?>                   
        </div>
    </body>
</html>
