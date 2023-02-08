<?php

class Check_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function search() {
        $this->load->model('check_model');
        $data['categories'] = $this->check_model->getAllCategories();
        $this->load->view('search', $data);
    }

    public function whereis() {
        $name = $this->input->post('titre');
        $idCategorie = $this->input->post('idcategorie');
        $this->load->model('check_model');
        $data['objets'] = $this->check_model->whereis($idCategorie, $name);
        $this->load->view('result_search', $data);
    }
}