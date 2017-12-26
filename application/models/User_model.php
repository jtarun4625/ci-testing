<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers()
    {
        $this->load->database();
        $q = $this->db->query("SELECT * FROM user_accounts");
        $result = $q->result_array();
        return $result;
    }
}