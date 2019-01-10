<?php
    session_start();
    
    
    
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
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    if ($row=mysqli_fetch_array($result)) {
        $response['success'] = true;
        $response['message'] = "Hello " . $row['name'];
        $_SESSION['user_id']=$row['id'];
        
    }
    else{
        $response['success'] = false;
        $response['message'] = "Login failed";
    }   	
    
    echo json_encode($response);
    mysqli_close($conn);
?>
