<?php

class objet_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getObjetProposition($idutilisateur){
        $this->load->model("echange_model");
        $objets = $this->getAllObjet();
        $val = array();
        foreach ($objets as $objet){
            if($this->echange_model->isInProposition($idutilisateur, $objet['idobjet'])){
                $val[] = $objet;
            }
        }
        return $val;
    }

    public function objetquery(){
        return $query = $this->db->select('idobjet, objet.idcategorie idcategorie, prixestimatif, titre,
       utilisateur.idutilisateur idutilisateur, nom nomutilisateur, prenom, email, motdepasse, description,
       nomcategorie')->from('objet')->join('utilisateur',
            'objet.idutilisateur = utilisateur.idutilisateur')->join('categorie','objet.idcategorie = categorie.idcategorie');
    }
    public function getObjet($idcategorie) {
        $query = $this->objetquery();
        $query = $query->where(array('idcategorie' => $idcategorie))->get();
        //$query = $this->db->get_where('objet',array('idcategorie' => $idcategorie));
        return $query->result_array();
    }

    public function getAllObjet() {
        $query = $this->objetquery();
        $query = $query->get();
        return $query->result_array();
    }

    public function update($idobjet,$titre, $description, $idcategorie, $prixestimatif){
        $this->db->where('idobjet',$idobjet);
        return $this->db->update('objet',array('titre'=>$titre, 'description'=>$description, 'prixestimatif'=>$prixestimatif, 'idcategorie'=>$idcategorie));
    }

    public function getObjetById($idobjet){
        $query = $this->objetquery();
        $query = $query->where(array('idobjet' => $idobjet))->get();
        return $query->result_array();
    }

    public function getPictures($arrayobjet){
        $this->load->model('photo_model');
        for($i = 0; $i < count($arrayobjet);++$i){
            if($arrayobjet[$i] != null){
                $pictures = $this->photo_model->getobjetsphoto($arrayobjet[$i]['idobjet']);
                $arrayobjet[$i]['photo'] = $pictures;
            }
        }
        return $arrayobjet;
    }

    public function getUtilisateurObjets($idutilisateur) {
        $query = $this->objetquery();
        $query = $query->where(array('objet.idutilisateur' => $idutilisateur))->get();
        return $query->result_array();
    }

    public function getUserObjectByCategorie($idutilisateur, $idcategorie){
        $query = $this->objetquery();
        $query = $query->where(array('objet.idutilisateur' => $idutilisateur, 'idcategorie'=>$idcategorie))->get();
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

    public function getByCategorie($idcategorie){
        $query = $this->objetquery();
        $query = $query->where(array('objet.idcategorie' => $idcategorie))->get();
        return $query->result_array();
    }

    public function whereis($idCategorie, $titre) {
        $sql = "select * from objet where idcategorie = ". $idCategorie ." and titre like '%" . $titre . "%'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}