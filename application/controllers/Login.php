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


        $response = array();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = array('name' => $name, 'email' => $email, 'password' => $password);

        $this->load->model('user');
        $this->user->insert_data_in_table($data);

        $response['success'] = true;
        $response['message'] = "Registration successful";
        echo json_encode($response);
    }

    public function login_submit() {
        session_start();



        $response = array();
   


        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->load->model('user');
        $result = $this->user->get_data_from_table($email, $password);

        foreach ($result as $row) {
            if ($row->email == $email && $row->password == $password) {
                $_SESSION['user_id'] = $row->id;
                $response['success'] = true;
                $response['message'] = "Hello " . $row->name;
            } 
            else{
                $response['success'] = false;
                $response['message'] = "Login failed";
            }
        }

        echo json_encode($response);
    }

    public function logout() {
        session_start();
        unset($_SESSION['user_id']);
        header("Location:/social_media/index.php/home/index");
        exit;
    }

}
