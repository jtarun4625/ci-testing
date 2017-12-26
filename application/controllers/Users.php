<?php

class Users extends CI_Controller {
    public function index() {
        $this->load->model(user);
        $data['users'] = $this->user->getUsers();
        $this->load->view(user_list,$data);
    }
}