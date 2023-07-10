<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
     public function __construct()
    {
        parent::__construct();
    }


    public function index(){
         $this->load->view('sign/login_admin');
    }

    public function home(){
     $this->load->view('admin/home');
    }

    public function statistique(){
     $this->load->view('admin/statistique');
    }

    public function validation_codes(){

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

     public function code_list(){

     }

     public function new_code(){

     }

     public function logout(){
          
     }  
 } 