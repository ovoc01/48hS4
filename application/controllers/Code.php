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

     public function invalidate_code(){
        $id = $this->input->get('id');
        if($id==null){
            redirect(('admin/validation_codes'));
        }
        $this->codem->invalidate_code($id);
        redirect('admin/validation_codes');
     }

     public function list_code(){
        $code_list = $this->codem->get_all_code();
        foreach($code_list as $code){
            if($code['status']==0){
                $code['status'] = "Non utilisé";
            }
            elseif($code['status']==5){
                 $code['status'] = "Utilisé";
            }
            else{
                 $code['status'] = "Code invalidé";
            }
        }
        $code_list = $code_list;
        $data['code_list'] = $code_list;
        $this->load->view('admin/code/list_code',$data);
     }
}