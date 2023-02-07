<?php

class Home extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->model("categorie_model");
        $this->load->model("utilisateur_model");
    }

    public function index(){
        if(isset($_SESSION['utilisateur'])){
            $this->load->model('objet_model');
            $data = array();
            $data['objets'] = $this->objet_model->getAllObjet();
            $this->load->view('template', $data);
        }else redirect("/home/login");

    }

    public function login(){
        $this->load->view('/sign/login');
    }

    public function signup(){
        $this->load->view('/sign/signup');
    }

    public function service($service = null){
        if(isset($_SESSION['utilisateur'])){

            $this->load->model('objet_model');
            $data = array();
            $data['service'] = $service;
            $data['categories'] = $this->categorie_model->getAllCategorie();
            $data['objets'] = $this->objet_model->getAllObjet();
            $data['utilisateurs']=$this->utilisateur_model->getAllUser();
            $this->load->view('template', $data);

        }else redirect("/home/login");
    }
    public function manage($service = null){
        if(isset($_SESSION['utilisateur'])){
            $data = array();
            $utilisateur = $this->utilisateur_model->getUser($_SESSION['utilisateur']['idutilisateur']);
            if($utilisateur['admin']){
                $data['service'] = $service;
                $data['categories'] = $this->categorie_model->getAllCategorie();
                $this->load->view('backoffice', $data);
            }else redirect("/home");
        }else redirect("/home");
    }
}