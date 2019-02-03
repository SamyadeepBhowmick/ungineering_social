<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_data_in_table($data) {
        
        $this->db->insert('users', $data);
                        
    }
    public function get_data_from_table($email,$password) {
        
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_data() {
        $data = array(
            'college' => $college,
            'phone_no' => $phone_no,
            'name' => $name,
            'email' => $email,
            'password' => $password
        );

        $this->db->where('id', $id);
        $updated_data = $this->db->update('users', $data);
        return $updated_data;
    }
   

    public function select_all_data($id) {

        $query = $this->db->select('*')->from('users')
                ->group_start()
                ->where('id', $id)
                ->group_end()
                ->get();
        return $query->result_array();
    }

    public function fetch_data() {

        return($this->db->where('id', $id));
    }

}
