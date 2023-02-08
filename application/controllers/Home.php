<?php

class Home extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->model("categorie_model");
        $this->load->model("utilisateur_model");
        $this->load->model('photo_model');
        if(!isset($_SESSION['utilisateur']))
            redirect("/sign/login");
    }

    public function index(){

            $this->load->model('objet_model');
            $data = array();
            $data['objets'] = $this->objet_model->getAllObjet();
            $data['objets'] = $this->objet_model->getPictures($data['objets']);
            $this->load->view('template', $data);

    }

    public function service($service = null){

            $this->load->model('objet_model');

            $data = array();
            $data['service'] = $service;
            $data['categories'] = $this->categorie_model->getAllCategorie();
            if(isset($_GET['idcategorie'], $_GET['idutilisateur'])){
                $data['objets'] = $this->objet_model->getUserObjectByCategorie($_GET['idutilisateur'], $_GET['idcategorie']);
            }elseif(isset($_GET['idcategorie'])){
                $data['objets'] = $this->objet_model->getByCategorie($_GET['idcategorie']);
            }elseif (isset($_GET['idutilisateur'])){
                $data['objets'] = $this->objet_model->getUtilisateurObjets($_GET['idutilisateur']);
            }else $data['objets'] = $this->objet_model->getAllObjet();
            $data['objets'] = $this->objet_model->getPictures($data['objets']);
            $data['utilisateurs']=$this->utilisateur_model->getAllUser();
            $this->load->view('template', $data);

    }



    public function manage($service = null){
        if(isset($_SESSION['utilisateur'], $service)){
            $data = array();
            if($_SESSION['utilisateur']['admin']){
                $data['service'] = $service;
                $data['categories'] = $this->categorie_model->getAllCategorie();
                if(isset($_GET['idcategorie']))
                    $data['categorie'] = $this->categorie_model->getCategorie($_GET['idcategorie']);
                else{
                    if($service != "addcategory"){
                        if(count($data['categorie'])>0)
                            $data['categorie'] = $data['categories'][0];
                        else
                            redirect("/home/manage/addcategory?error=0");
                    }
                }
                $this->load->view('backoffice', $data);
            }else redirect("/home");
        }else redirect("/home");
    }

    public function modifcat(){

            if($_SESSION['utilisateur']['admin']){
                $data = array();
                $data['modify'] = true;
                $data['categories'] = $this->categorie_model->getAllCategorie();
                if(isset($_GET['idcategorie']))
                    $data['categorie'] = $this->categorie_model->getCategorie($_GET['idcategorie']);
                else{
                    if(count($data['categorie'])>0)
                        $data['categorie'] = $data['categories'][0];
                    else
                        redirect("/home/manage/addcategory?error=0");
                }
                $this->load->view('modifycategoy', $data);
            }else redirect("/home");

    }

}