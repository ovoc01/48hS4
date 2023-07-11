<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codem extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_code($code, $montant){
        $sql = "insert into code (intitule, montant) values ('".$code."', '".$montant."')";
        $query = $this->db->query($sql);
    }
}