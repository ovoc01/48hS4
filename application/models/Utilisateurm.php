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
}