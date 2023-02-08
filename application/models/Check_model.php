<?php

class check_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCategories() {
        $query = $this->db->get('categorie');
        return $query->result_array();
    }

    public function whereis($idCategorie, $name) {
        $query = $this->db->get_where('objet', array('idcategorie' => $idCategorie, 'titre' => $name));
        return $query->result_array();
    }
}