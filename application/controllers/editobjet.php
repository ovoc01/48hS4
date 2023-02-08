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
            $this->load->helper("takalo_helper");
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
        if(isset($_GET['titre'], $_GET['description'], $_GET['idcategorie'], $_GET['prixestimatif'])){
            $titre = $_GET['titre']; $description = $_GET['description'];
            $idobjet = $_GET['idobjet'];
            $idcategorie = $_GET['idcategorie'];
            $prixestimatif = $_GET['prixestimatif'];
            if($this->objet_model->update($idobjet,$titre, $description, $idcategorie, $prixestimatif)){
                redirect("/home?editsuccess");
            }else redirect("/home?editerror");
        }else redirect("/home?editerror");
    }
}