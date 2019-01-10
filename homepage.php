<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOMEPAGE</title>
        <link rel="stylesheet" href= "css/homepage.css"/>
    </head>
    <body>
        <div class="main">
            <div class="a">
                <div class="a1">
                    <img src="img/pic1.jpeg" width="310px"; height="90px">
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                        ?>
                        <a href="login_form.php"><button class="login" >Login</button></a>
                        <a href="register_form.php"><button class="new user" >New user</button></a>
                        <?php
                    } else {
                        ?>

                        <a href="dashboard.php"><button class="dashboard">My Dashboard</button></a>
                        <a href=""><button class="logout">Logout</button> </a> 
                        <?php
                    }
                    ?>    
                </div>
            </div>
            <div class="b">
                <?php
                if (isset($_SESSION['user_id'])) {
                    //$id= $_SESSION['user_id']; 
                    ?>
                    <div class="ab">Write something here </div>
                    <form method="post" action="loggedin_submit.php">
                        <div class="ab1">
                            <p>
                                <textarea class="abcd" rows = "6" cols = "101" id="status" name="status"></textarea>
                            </p>
                        </div>
                        <input class="submit" type="submit" name="submit" value="Submit"/>
                        <hr></hr>
                    </form>
                    <?php
                }
                ?>
                <?php
                $hostname = "localhost";
                $username = "root";
                $db_password = "amansagar";
                $db_name = "social_media";

                $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT 
                        statuss.status,users.name
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
                        <h1 class="h1"><?php echo $row['name'] ?></h1>
                        <p><?php echo $row['status'] ?></p>
                        <p class="bb"><?php echo $row['date'] ?><?php echo $row['time'] ?></p>
                        </p>
                    </div>    	
                    <?php
                }
                mysqli_close($conn);
                ?>                                  
            </div>
        </div>
        <script type="text/javascript" src="js/homepage.js"></script>
    </body>
</html>

