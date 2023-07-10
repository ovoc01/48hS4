<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller{

    public function index()
    {
       $this->load->view('sign/login');
    }


    public function inscription(){
        $this->load->view('sign/inscription');
    }
    
    public function login(){
        //TODO
    }

    public function logout(){
        //TODO
    }

}