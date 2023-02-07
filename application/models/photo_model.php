<?php

class photo_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function insert($data) {
        return $this->db->insert('photo', array('idobjet' => $data['idobjet'], 'path' => $data['file_path']));
    }
}