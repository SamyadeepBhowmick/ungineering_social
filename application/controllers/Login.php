<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login_form');
    }

    public function register() {
        $this->load->view('register_form');
    }

    public function register_submit() {
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
        if (!mysqli_query($conn, $sql)) {
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo json_encode($response);
            exit();
        }
        $response['success'] = true;
        $response['message'] = "Registration successful";
        echo json_encode($response);
        mysqli_close($conn);
    }

    public function login_submit() {
        session_start();



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

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo json_encode($response);
            exit();
        }

        if ($row = mysqli_fetch_array($result)) {
            $response['success'] = true;
            $response['message'] = "Hello " . $row['name'];
            $_SESSION['user_id'] = $row['id'];
        } else {
            $response['success'] = false;
            $response['message'] = "Login failed";
        }

        echo json_encode($response);
        mysqli_close($conn);
    }

    public function logout() {
        session_start();
        unset($_SESSION['user_id']);
        header("Location:/social_media/index.php/home/index");
        exit;
    }

}
