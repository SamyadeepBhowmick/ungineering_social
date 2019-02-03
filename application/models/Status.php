<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_data_from_table() {
        $query = $this->db->get('statuses');
        return $query->result();
    }
    public function select_all_status($id) {

        $query = $this->db->select('*')->from('statuses')
                ->group_start()
                ->where('userid', $id)
                ->group_end()
                ->get();
        return $query->result_array();
    }

}

