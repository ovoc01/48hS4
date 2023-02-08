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

        $data['prix'] = $this->input->post('prix');

        $this->load->model('Objet_model');
        $this->Objet_model->save($idUtilisateur, $idUtilisateur, $prixEstimatif, $titre, $description);
        //$this->load->view('list', $data);
    }

    public function lastId() {
        $this->load->model('objet_model');
        $data['objets'] = $this->objet_model->getLastId();
        $this->load->view('list', $data);
    }

    public function update() {
        $idObjet = 1;
        $idUtilisateur = $this->input->get('idUtilisateur');
        $idCategorie = $this->input->get('idCategorie');
        $prixEstimatif = $this->input->get('prix');
        $titre = $this->input->get('titre');
        $description = $this->input->get('description');
        $this->load->model('Objet_model');
        $this->Objet_model->update($idObjet, $idUtilisateur, $idCategorie, $prixEstimatif, $titre, $description);
    }

    /*public function upload()
    {
        $files = $_FILES;
        $count = count($_FILES['userfile']['name']);
        for ($i=0; $i<$count; $i++)
        {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
        }
    }*/

    /*public function upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('images')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_form', $error);
        } else {
            $image_data = $this->upload->data();
            $this->load->model('photo_model');
            $image_data = array(
                //'file_name' => $image_data['file_name'],
                //'file_type' => $image_data['file_type'],
                'file_path' => $image_data['file_path']
            );
            $this->photo_model->insert($image_data);
            $this->load->view('upload_form', $image_data);
        }
    }*/

    public function historiques() {
        //$idobjet = $this->input->post('idobjet');
        $idobjet = 1;
        $this->load->model('objet_model');
        $data['historiques'] = $this->objet_model->gethistorique($idobjet);
        $this->load->view('historique', $data);
    }

}