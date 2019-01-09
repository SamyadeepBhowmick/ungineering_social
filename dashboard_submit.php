<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "supriya1234";
    $database = "social_media";
    
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    
    $id=$_SESSION['user_id']; //echo $id; 
    $college=$_POST['college']; //echo $college;
    $phone_no=$_POST['phone_no']; //echo $phone_no;
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    $sql = "UPDATE users
      SET college='$college',phone_no= '$phone_no',name='$name',email= '$email' ,password='$password'
      WHERE user_id= $id";// echo $sql;
      
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }    	
    $response['success'] = true;
    $response['message'] = "Updated";
    echo json_encode($response);
    mysqli_close($conn);
?>  










