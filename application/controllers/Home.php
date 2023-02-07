<?php

class Home extends CI_Controller
{
    public function index(){
        $this->load->view('template');
    }
    public function service($service = null){
        $data = array(); $data['service'] = $service;
        $this->load->view('template', $data);
    }
}