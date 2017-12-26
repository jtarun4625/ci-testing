<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers()
    {
        $q = $this->db->select(['firstname','lastname'])
                 ->get("user_accounts");
        $result = $q->result_array();
        return $result;
    }
}