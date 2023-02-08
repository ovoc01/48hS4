<?php

class addobjet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("categorie_model");
        $this->load->model("objet_model");
        $this->load->helper("takalo_helper");
    }

    public function index(){
        $data = array();
        $data['categories'] = $this->categorie_model->getAllCategorie();
        $this->load->view("addobjet", $data);
    }

    function add(){
        if(isset($_GET['titre'], $_GET['description'], $_GET['idcategorie'], $_GET['prixestimatif'])){
            $titre = $_GET['titre']; $description = $_GET['description'];
            $idcategorie = $_GET['idcategorie'];
            $prixestimatif = $_GET['prixestimatif'];
            if($this->objet_model->save($_SESSION['utilisateur']['idutilisateur'], $prixestimatif, $titre, $description, $idcategorie)){
                redirect("/home?editsuccess");
            }else redirect("/home?editerror");
        }else redirect("/home?editerror");
    }
}