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

    public function save($nomcategorie){
        $data = array('nomcategorie'=>$nomcategorie);
        return $this->db->insert('categorie',$data);
    }

    public function getCategorie($idcategorie){
        $query = $this->db->get_where('categorie', array('idcategorie'=>$idcategorie));
        $result = $query->result_array();
        if(count($result)>0) return $result[0];
        return false;
    }

    public function update($idcategorie, $nomcategorie){
        $this->db->where('idcategorie',$idcategorie);
        return $this->db->update('categorie',array('nomcategorie'=>$nomcategorie));
    }

    public function delete($idcategorie){
        $this->db->where('idcategorie',$idcategorie);
        return $this->db->delete('categorie');
    }

}
?>