<?php

class CheckController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function search() {
        $this->load->model('check_model');
        $data['categories'] = $this->check_model->getAllCategories();
        $this->load->view('search', $data);
    }
}