<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "supriya1234";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id=$_SESSION['user_id']; echo $id; 
    $college=$_POST['college']; echo $college;
    $phone_no=$_POST['phone_no']; //echo $phone_no;
    
    $sql = "UPDATE users
      SET college='$college',phone_no= '$phone_no'
      WHERE user_id= $id";;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }    	
    echo"update sucessfull";
    mysqli_close($conn);
?>  









<?php 
    /*session_start(); 
    $hostname="localhost";
    $username="root";
    $db_password="supriya1234";
    $database="social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$database);
    if(!$conn){
        die("connection failed:" . mysqli_connect_error());
    }
    
    $id=$_SESSION['user_id']; //echo $id; 
    $college=$_POST['college']; //echo $college;
    $phone_no=$_POST['phone_no']; //echo $phone_no;
    
    $sql="UPDATE users 
          SET college='$college', phone_no='$phone_no'
          WHERE user_id = $id";
           
    $result = mysqli_query($conn, $sql);     	
    /*if(!$result)){
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    echo"update successfull";
    mysqli_close($conn);
?>
