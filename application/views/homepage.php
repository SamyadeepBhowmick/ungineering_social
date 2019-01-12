<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOMEPAGE</title>
        <link rel="stylesheet" href= "/social_media/static/css/homepage.css"/>
    </head>
    <body>
        <div class="main">
            <div class="a">
                <div class="a1">
                    <div class="img">
                        <p><b class="logo">S</b><span STYLE="color: blue; font-size: 40px">ocialite</span></p>
                    </div>
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                        ?>
                    <a href="/social_media/index.php/login/index"><button class="login" >Login</button></a>
                    <a href="/social_media/index.php/login/register"><button class="new user" >New_user</button></a>
                        <?php
                    } else {
                        ?>

                    <a href="/social_media/index.php/home/dashboard"><button class="dashboard">My Dashboard</button></a>
                        <a href="/social_media/index.php/login/logout"><button class="logout">Logout</button> </a> 
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
                    <form method="post" action="homepage_submit.php" id="loggedin_submit">
                <div class="ab1">
                    <p>
                        <textarea class="abcd" rows = "6" cols = "101"  name="status"></textarea>
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
                $db_password = "123samya";
                $db_name = "social_media";

                $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT 
                        statuses.status,statuses.date,statuses.time,users.name
                    FROM
                        statuses
                    INNER JOIN 
                        users
                    ON
                        statuses.userid=users.id
                    ORDER BY 
                        statuses.id DESC";
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
        <script type="text/javascript" src="../../static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../../static/js/homepage_submit.js"></script>  
    </body>
</html>

