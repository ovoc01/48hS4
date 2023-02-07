<?php

class categorie_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCategorie(){
        $query = $this->db->get('categorie');
        return $query->result_array();
    }

}
?>