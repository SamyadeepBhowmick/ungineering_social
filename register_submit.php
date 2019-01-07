<?php
    $hostname="localhost";
    $username="root";
    $db_password="supriya1234";
    $db_name="social_media";
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
    if(!mysqli_query($conn,$sql)){
        die("Error:".$sql."<br/>".mysql_error($conn));
    }
    echo "registration successful";
    mysqli_close($conn);
?>
<a href="login_form.php">Back</a>








<?php
    /*$name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['confirm password'];
    echo $name;
    echo $email;
    echo $password;
    echo $conpassword;*/
?>
