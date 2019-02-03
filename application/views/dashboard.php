<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* session_start();
  // if(isset($_SESSION['user_id'])) {
  //   $id= $_SESSION['user_id'];
  $id = 1;
  $hostname = "localhost";
  $username = "root";
  $db_password = "supriya1234";
  $database = "social_media";

  $conn = mysqli_connect($hostname, $username, $db_password, $database);
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
  die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($result)) {
  $name = $row['name'];
  $email = $row['email'];
  $password = $row['password'];
  $college = $row['college'];
  $phone_no = $row['phone_no'];
  }

  mysqli_close($conn);
  // } */
?>


<html>
    <head>
        <link rel ="stylesheet" href="../../static/css/dashboard.css">
    </head>
    <body>
        <div class="bound">
            <div class="main1">
                <div class="child1">
                    <div class="img">
                        <p><b class="logo">S</b><span STYLE="color: blue; font-size: 40px">ocialite</span></p>
                    </div>
                </div>
                <div class ="child1">
                    <div class="upper1">My Dashboard
                    </div>
                </div>
                <div class ="child1">
                    <div class="upper1">
                        <button  class="logout" onclick="window.location.href = 'login_form.php'">LogOut</button>
                    </div>
                    <div class="upper2"> 
                        <button  class="logout" onclick="window.location.href = 'homepage.php'" text-align="center">Homepage</button>
                    </div>
                </div>
            </div>
            <div class="main2">
                <div class="child21">
                    <div class="box1">My Account Details 
                    </div>
                </div>
                <div class="account">
                    <form method="post" id="dashboard" action="/social_media/index.php/home/dashboard_submit">
                        <div class="child22">
                            Name
                        </div>
                        <div class="child23">
                            <input type="text" name="name" class="name" value="<?php echo $data['name']; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            E-mail
                        </div>
                        <div class="child23">
                            <input type="text" name="email" class="name" value="<?php echo $data['email']; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            Password
                        </div>
                        <div class="child23">
                            <input type="text" name="password" class="name" value="<?php echo $data['password']; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            College
                        </div>
                        <div class="child23">
                            <input type="text" name="college" class="name" value="<?php echo $data['college']; ?>" /></br></br>
                        </div>
                        <div class="child22">
                            Phone_no
                        </div>
                        <div class="child23">
                            <input type="text" name="phone_no" class="name" value="<?php echo $data['phone_no']; ?>" /></br></br>
                        </div>
                        <div class="child24">
                            <input type="submit" name="update" class="update" value="update"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="main3">
                <div class="child31">
                    <div class="box1">My post
                    </div>  
                </div>
                <div class="child32">
                    <?php
                    // if(isset($_SESSION['user_id'])) {
                    //    $id= $_SESSION['user_id'];
                    $id = 1;

                    $hostname = "localhost";
                    $username = "root";
                    $db_password = "supriya1234";
                    $database = "social_media";

                    $conn = mysqli_connect($hostname, $username, $db_password, $database);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM statuses WHERE userid=$id";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        die("Error: " . $sql . "<br>" . mysqli_error($conn));
                    }

                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <p class="post"><?php echo $row['date'] . " " . $row['time'] . " " ?></br><?php echo $row['status']; ?></p>
                        <?php
                    }

                    mysqli_close($conn);
                    
                    ?> 

                    <!--<p class="post">-->
                        <?php
                        //echo $status_data->date;
                        /*  foreach ($data as $status_data) {
                          echo $status_data['date'] . " " . $status_data['time'];
                          }
                          // ?></br>
                          //<?php
                          //foreach ($data as $status_data) {
                          echo $status_data['status'];
                          //}
                          ?></p>
                          }
                          <?php
                          // }
                          // mysqli_close($conn);
                          //  }*/
                          ?> 
                        </div>
                        </div>
                        </div>
                        <script type = "text/javascript" src = "../../static/js/jquery-3.3.1.min.js"></script>
                        <script type="text/javascript" src="../../static/js/dashboard.js"></script>
                        </body>
                        </html>
