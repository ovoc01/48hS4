<?php

class detail extends CI_Controller
{

    public function __construct() {
        parent::__construct();

        $this->load->model("categorie_model");
        $this->load->model("utilisateur_model");
        $this->load->model("objet_model");
        $this->load->model('photo_model');
        $this->load->model('echange_model');
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
            if(count($data['objets'])>0){
                $data['inproposition'] = $this->echange_model->isInProposition($_SESSION['utilisateur']['idutilisateur'], $data['objets'][0]['idobjet']);
                $data['indemande'] = $this->echange_model->isInDemande($_SESSION['utilisateur']['idutilisateur'], $data['objets'][0]['idobjet']);
                if($data['inproposition']){
                    $proposition = $this->echange_model->getIdInProposition($_SESSION['utilisateur']['idutilisateur'], $data['objets'][0]['idobjet']);
                    if($proposition != null)
                        $data['proposition'] = $proposition;
                }
            }
            $data['mine'] = $this->objet_model->getUtilisateurObjets($_SESSION['utilisateur']['idutilisateur']);

            $this->load->view("detail_objet", $data);
        }
    }

}