<?php

class objet_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getObjet($idcategorie) {
        $query = $this->db->get_where('objet',array('idcategorie' => $idcategorie));
        return $query->result_array();
    }

    public function getAllObjet() {
        $query = $this->db->get('objet');
        return $query->result_array();
    }

    public function getUtilisateurObjets($idutilisateur) {
        $query = $this->db->get_where('objet',array('idutilisateur' => $idutilisateur));
        return $query->result_array();
    }

    public function save($idUtilisateur, $prixEstime, $titre, $description, $idCategorie)
    {
        $this->db->insert('objet', array('idutilisateur' => $idUtilisateur, 'idcategorie' => $idCategorie, 'prixestimatif' => $prixEstime, 'titre' => $titre, 'description' => $description));
    }

    public function getLastId() {
        $query = $this->db->query("select * from objet order by idobjet desc limit 1");
        return $query->row_array();
    }
}