<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller{

     public function __construct()
    {
        parent::__construct();
        $this->load->model("utilisateurm");
    }

    public function index()
    {
       $this->load->view('sign/login');
    }

    public function inscription_utilisateur(){
        if(!isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'])){
            redirect("utilisateur/");
        }
        else {
            $nom = (string)$_POST['nom'];
            $prenom = (string)$_POST['prenom'];
            $email = (string)$_POST['email']; 
            $mdp =(string) $_POST['password'];
            $this->utilisateurm->inscrire($nom, $prenom, $email, $mdp);
        }
    }

    public function inscription(){
        $this->load->view("sign/inscription");
    }


    
    public function login(){
        if(!isset($_POST['email'],$_POST['password'])){
            redirect("utilisateur/");
        }
        $email = (string)$_POST['email']; $mdp =(string) $_POST['password'];
        $user = $this->utilisateurm->login($email,$mdp);
        if(count($user)<1){
            redirect("utilisateur/index?error=utilisateur non trouvé");
        }
        //TODO
    }

    public function logout(){
        //TODO
    }



}