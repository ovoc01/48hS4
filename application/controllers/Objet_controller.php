<?php

class objet_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function allObjet() {
        $this->load->model('objet_model');
        $data['objets'] = $this->objet_model->getAllObjet();
        $this->load->view('list', $data);
    }

    public function getObjet($id) {
        $this->load->model('objet_model');
        $data['objets'] = $this->objet_model->getObjet($id);
        $this->load->view('objet', $data);
    }

    public function utilisateurObjet($idUtilisateur) {
        $this->load->model('objet_model');
        $data['objets'] = $this->objet_model->getUtilisateurObjets($idUtilisateur);
        $this->load->view('objets', $data);
    }

    public function insert() {
        $idUtilisateur = $this->input->post('idUtilisateur');
        $idCategorie = $this->input->post('idCategorie');
        $prixEstimatif = $this->input->post('prix');
        $titre = $this->input->post('titre');
        $description = $this->input->post('description');

        $this->load->model('objet_model');
        $this->objet_model->insert($idUtilisateur, $idUtilisateur, $prixEstimatif, $titre, $description);
        $this->load->view('list');
    }

    public function lastId() {
        $this->load->model('objet_model');
        $data['objets'] = $this->objet_model->getLastId();
        $this->load->view('list', $data);
    }

    public function update() {
        $idUtilisateur = $this->input->post('idUtilisateur');
        $idCategorie = $this->input->post('idCategorie');
        $prixEstimatif = $this->input->post('prix');
        $titre = $this->input->post('titre');
        $description = $this->input->post('description');


    }
}