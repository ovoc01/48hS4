
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateurm extends CI_Model{
     public function __construct()
    {
        parent::__construct();
    }

    public function login($email,$mdp)
    {
        $sql = "select * from v_utilisateur_valide where email ='".$email."' and mdp='".$mdp."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function inscrire($nom, $prenom, $email, $mdp){
        $sql = "insert into user (nom, prenom, email, mdp) values ('".$nom."', '".$prenom."','".$email."','".$mdp."')";
        $query = $this->db->query($sql);
    }

    public function check_user($email){
        $sql = "select * from user where email = '".$email."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function user_list(){
        $sql = "select * from v_utilisateur_valide";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}