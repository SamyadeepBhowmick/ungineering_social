<?php 
    session_start();  
    if(isset($_SESSION['user_id'])){
        $id= $_SESSION['user_id'];
    
        $hostname = "localhost";
        $username = "root";
        $db_password = "amansagar";
        $db_name = "social_media";
        
        $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $date="2018-02-08";
        $time="11:30:45";
        $status = $_POST['status'];
        $sql = "INSERT INTO statuss(userid,status,date,time) VALUES($id,'$status','$date','$time')";
        if(!mysqli_query($conn,$sql)){
            die("Error".$sql."<br/>".mysqli_error($conn));
        }
  	
        echo"Status uploaded";
        mysqli_close($conn);
     }
?>

