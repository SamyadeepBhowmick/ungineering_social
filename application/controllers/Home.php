<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {

    public function index() {
        $this->load->view('homepage');
    }

    public function homepage_submit() {
        session_start();
        if (isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];

            $hostname = "localhost";
            $username = "root";
            $db_password = "123samya";
            $db_name = "social_media";

            $response = array();
            $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
            if (!$conn) {
                $response['success'] = false;
                $response['message'] = "Connection failed: " . mysqli_connect_error();
                echo json_encode($response);
                exit();
            }

            $date = "2018-02-08";
            $time = "11:30:45";
            $status = $_POST['status'];
            $sql = "INSERT INTO statuses(userid,status,date,time) VALUES($id,'$status','$date','$time')";
            if (!mysqli_query($conn, $sql)) {
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
    }

    public function dashboard() {
        $this->load->view('dashboard');
    }

    public function dashboard_submit() {
        session_start();
        $hostname = "localhost";
        $username = "root";
        $db_password = "123samya";
        $database = "social_media";

        $response = array();
        $conn = mysqli_connect($hostname, $username, $db_password, $database);
        if (!$conn) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }

        $id = $_SESSION['user_id']; //echo $id; 
        $college = $_POST['college']; //echo $college;
        $phone_no = $_POST['phone_no']; //echo $phone_no;
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "UPDATE users
      SET college='$college',phone_no= '$phone_no',name='$name',email= '$email' ,password='$password'
      WHERE id= $id"; // echo $sql;

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
    }

}
