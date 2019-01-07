<!DOCTYPE html>
<html>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $db_password = "amansagar";
            $db_name = "social_media";
            $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
            if(!$conn){
                die("connection faild: ". mysqli_connect_error());
            }
            $status = $_POST['status'];
            $sql = "INSERT INTO statuss(status) VALUES('status')";
            if(!mysqli_query($conn,$sql)){
                die("Error".$sql."<br/>".mysqli_error($conn));
            }?>
            <a href="homepage.php">Home page</a>
            <?php
            echo"Status uploaded";
            mysqli_close($conn);
            ?>
    </body>
</html>
