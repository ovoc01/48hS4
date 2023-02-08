<?php

class Sign extends CI_Controller
{
    public function login(){
        if(isset($_SESSION['utilisateur'])){
            redirect("/home");
        }
        $this->load->view('/sign/login');
    }

    public function signup(){
        $this->load->view('/sign/signup');
    }

    public function logout(){
        $this->session->unset_userdata("utilisateur");
        redirect("sign/login");
    }
}