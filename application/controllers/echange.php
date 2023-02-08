<?php

class echange extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("echange_model");
        $this->load->model("objet_model");
    }
    public function index(){
        if(isset($_POST['idobjet1'], $_POST['idobjet2'], $_SESSION['utilisateur'])){
            $idobjet1 = $_POST['idobjet1']; $idobjet2 = $_POST['idobjet2'];
            $objet1 = $this->objet_model->getObjetById($idobjet1)[0];
            $idutilisateur1 = $objet1['idutilisateur'];
            $idutilisateur2 = $_SESSION['utilisateur']['idutilisateur'];
            $this->echange_model->proposer($idobjet1, $idobjet2, $idutilisateur1, $idutilisateur2);
            redirect("/home?propositionsuccess");
        }else{
            redirect("/home?propositionerror");
        }
    }

    public function changestate(){
        if(isset($_POST['idechange'], $_POST['idetat'])){
            $idechange = $_POST['idechange']; $idetat = $_POST['idetat'];
            $this->echange_model->answer($idechange, $idetat);
            redirect("/home?propositionsuccess");
        }else{
            redirect("/home?propositionerror");
        }
    }
}