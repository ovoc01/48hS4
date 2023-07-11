<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
     public function __construct()
    {
        parent::__construct();
            $this->load->model('utilisateurm');
            $this->load->model('moneym');
    }


    public function index(){
         $this->load->view('sign/login_admin');
    }

    public function home(){
    $user_list = $this->utilisateurm->user_list();
    $data['user_list_nbr'] = count($user_list);
     $this->load->view('admin/home', $data);
    }

    public function statistique(){
     $this->load->view('admin/statistique');
    }

    public function validation_codes(){
        $code_use = $this->moneym->get_code_use_liste();
        $data['code_use'] = $code_use;
        $this->load->view('admin/code/validation_code',$data);
    }

    public function regime_list(){

    }

    public function new_regime(){

    }

    public function plat_list(){
        
    }

     public function new_plat(){
     
     }

     public function activity_list(){

     }

     public function new_activity(){

     }

    

     public function logout(){
          
     }  
 } 