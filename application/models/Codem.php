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

    public function invalidate_code($id){
        $this->db->set('status',10);
        $this->db->where('idCode',$id);
        $this->db->update('code');
    }

    public function get_all_code()
    {
        $sql = "select * from code ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}