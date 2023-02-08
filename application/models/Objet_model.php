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

    public function update($idObjet, $idUtilisateur, $prixEstime, $titre, $description, $idCategorie)
    {
        $this->db->set('idcategorie', $idCategorie);
        $this->db->set('prixestimatif', $prixEstime);
        $this->db->set('titre', $titre);
        $this->db->set('description', $description);
        $this->db->where('idutilisateur', $idUtilisateur);
        $this->db->where('idobjet', $idObjet);
        $this->db->update('objet');
    }

    public function getAllOtherObjet($idobjet) {
        $query = $this->db->get_where('objet', 'idobjet', array('idobjet' => $idobjet));
        return $query->result_array();
    }

    public function getMyObjet($idobjet) {
        $query = $this->db->get_where('objet', 'idobjet', array('idobjet' => $idobjet));
        return $query->result_array();
    }

    public function gethistorique($idobjet) {
        $query = $this->db->query(sprintf('select historique.idobjet as idobjet, utilisateur.nom as nom, utilisateur.prenom as prenom, objet.titre as titre, objet.description as description, historique.datedechange as datedechange from historique join objet on historique.idobjet = objet.idobjet join utilisateur on utilisateur.idutilisateur = historique.idutilisateur where historique.idobjet = %s',$idobjet));
        return $query->result_array();
    }
}