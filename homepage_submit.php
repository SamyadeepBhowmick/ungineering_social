<?php 
    session_start();  
    if(isset($_SESSION['user_id'])){
        $id= $_SESSION['user_id'];
    
        $hostname = "localhost";
        $username = "root";
        $db_password = "amansagar";
        $db_name = "social_media";
        
        $response =array();
        $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
        if (!$conn) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }
        
        $date="2018-02-08";
        $time="11:30:45";
        $status = $_POST['status'];
        $sql = "INSERT INTO statuses(userid,status,date,time) VALUES($id,'$status','$date','$time')";
        if(!mysqli_query($conn,$sql)){
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo json_encode($response);
            exit();
        }
        $response['success'] = true;
        $response['message'] = "Status uploaded";
        echo json_encode($response);
    }
    mysqli_close($conn);
    
?>

