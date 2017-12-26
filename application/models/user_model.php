<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsers()
    {
        return [["firstname" => "User1", "lastname" => "Last Name"],
            ["firstname" => "User2", "lastname" => "Last Name"]];
    }
}