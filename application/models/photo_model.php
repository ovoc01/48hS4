<?php

class photo_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getObjetsPhoto($idobjet){
        $query = $this->db->get_where('photo',array('idobjet' => $idobjet));
        return $query->result_array();
    }


}