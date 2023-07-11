<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('codem');
    }

     public function code_list(){

     }

     public function new_code(){
        $this->load->view('admin/code/new_code');
     }

     public function new_code_insertion(){
        if($this->input->post('code') == null || $this->input->post('montant') == null){
            redirect(base_url('code/new_code'));
        }
        $code = $this->input->post('code');
        $montant = $this->input->post('montant');
        $this->codem->insert_code($code, $montant);
        $success = "code ajouté avec succès";
        redirect('code/new_code?success='.$success);
     }
}