<?php

class editobjet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_GET['idobjet']))
            redirect("/home?editerror");
        else {
            $this->load->model("objet_model");
            $this->load->model("categorie_model");
        }
    }

    function index(){
        $objets = $this->objet_model->getObjetById($_GET['idobjet']);
        $objet = null;
        if(count($objets)>0) $objet = $objets[0];
        if($objet != null){
            $data = array();
            $data['objet'] = $objet;
            $data['categories'] = $this->categorie_model->getAllCategorie();
            $this->load->view("editobjet", $data);
        }else redirect("/home?editerror");
    }

    function edit(){
        if(isset($_POST['idobjet'])){
            $titre = $_GET['titre']; $description = $_GET['description']; $idcategorie = $_GET['idcategorie'];
            $prixestimatif = $_GET['prixestimatif'];
            $this->objet_model->update($idobjet,$titre, $description, $idcategorie, $prixestimatif);
        }
    }
}