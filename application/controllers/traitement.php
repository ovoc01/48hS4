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

    public function addcategory(){
        if(isset($_POST['nomcategory'])){
            $nomcategorie = $_POST['nomcategory'];
            if($this->categorie_model->save($nomcategorie))
                echo json_encode(0);
            else echo json_encode(1);
        }else echo json_encode(1);
    }

    public function modifcategorie(){
        if(isset($_POST['nomcategory'],$_POST['idcategory'])){
            $nomcategorie = $_POST['nomcategory'];
            $idcategorie = $_POST['idcategory'];
            if($this->categorie_model->update($idcategorie, $nomcategorie)){
                echo json_encode(0);
            }else echo json_encode(1);
        }else echo json_encode(1);
    }

    public function deletecategorie(){
        if(isset($_POST['idcategory'])){
            $idcategorie = $_POST['idcategory'];
            if($this->categorie_model->delete($idcategorie))
                echo json_encode(0);
            else echo json_encode(1);
        }else echo json_encode(1);
    }

}