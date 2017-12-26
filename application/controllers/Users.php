<?php

class Users extends CI_Controller {
    public function index() {
        $this->load->model(UserModel);
        $data['users'] = $this->UserModel->getUsers();
        $this->load->view(user_list,$data);
    }
}