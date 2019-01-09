<?php
    $hostname="localhost";
    $username="root";
    $db_password="123samya";
    $db_name="social_media";
    
    $response = array();
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
    if(!mysqli_query($conn,$sql)){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response);
    mysqli_close($conn);
?>
