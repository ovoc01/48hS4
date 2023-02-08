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

    public function whereis($idCategorie, $titre) {
        $sql = "select * from objet where idcategorie = ". $idCategorie ." and titre like '%" . $titre . "%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}