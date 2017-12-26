<?php

class Users extends CI_Controller {
    public function index() {
        $this->load->model(user_model);
        $data['users'] = $this->user_model->getUsers();
        $this->load->view(user_list,$data);
    }
}