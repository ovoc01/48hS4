<?php

class traitement extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        $this->load->model("categorie_model");
        $this->load->model("utilisateur_model");
    }

    public function login(){
        if(isset($_POST['email'], $_POST['password'])){
            $email = $_POST['email']; $password = $_POST['password'];
            $login = $this->utilisateur_model->checkLogin($email, $password);
            if($login != false){
                $_SESSION['utilisateur'] = $login;
                echo json_encode(0);
            }else echo json_encode(1);
        }else {
            echo "misy blem";
            echo json_encode(1);
        }
    }

    public function signup(){
        if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'])){
            $nom = $_POST['nom']; $prenom = $_POST['prenom']; $mail = $_POST['email']; $mdp = $_POST['password'];
            if($this->utilisateur_model->save($nom, $prenom, $mail, $mdp))
                echo json_encode(0);
            else echo json_encode(1);
        }else echo json_encode(1);
    }

}