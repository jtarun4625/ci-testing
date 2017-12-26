<?php

class Users extends CI_Controller {
    public function index() {
        $this->load->model(User_model);
        $data['users'] = $this->User_model->getUsers();
        $this->load->view(user_list,$data);
    }
}