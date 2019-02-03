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
            $db_password = "supriya1234";
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
        // session_start();
        $id = 1;
        $this->load->model('user');
        $data = $this->user->select_all_data($id);
        //print_r($data);
        $this->load->model('status');
        $status_data['data']= $this->status->select_all_status($id);
       //print_r($status_data);
        $this->load->view('dashboard', array('data' => $data[0]), $status_data);
    }

    public function dashboard_submit() {
        session_start();
        $response = array();
        $conn = $this->load->model('user');
        if (!$conn) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " .mysqli_connect_error();
            echo json_encode($response);
            exit();
        }


        // $id = $_SESSION['user_id']; //echo $id; 
        $id = 1;
        $college = $_POST['college']; //echo $college;
        $phone_no = $_POST['phone_no']; //echo $phone_no;
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $result = $this->user->update_data();
        if (!$result) {
            $response['success'] = false;
            $response['message'] = "Error: ";
            echo json_encode($response);
            exit();
        }

        $response['success'] = true;
        $response['message'] = "Updated";
        echo json_encode($response);
        // mysqli_close($conn);
    }

}
