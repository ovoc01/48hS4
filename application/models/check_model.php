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
}