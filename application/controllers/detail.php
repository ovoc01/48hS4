<?php

class detail extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->model("categorie_model");
        $this->load->model("utilisateur_model");
        $this->load->model("objet_model");
        $this->load->model('photo_model');
        if(!isset($_SESSION['utilisateur']))
            redirect("/sign/login");
    }

    public function index(){
        if(!isset($_GET['idobjet']))
            redirect($_SERVER['HTTP_REFERER']);
        else{
            $data = array();
            $data['objets'] = $this->objet_model->getObjetById($_GET['idobjet']);
            $data['objets'] = $this->objet_model->getPictures($data['objets']);
            $data['mine'] = $this->objet_model->getUtilisateurObjets($_SESSION['utilisateur']['idutilisateur']);
            $this->load->view("detail_objet", $data);
        }
    }

}