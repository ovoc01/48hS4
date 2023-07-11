<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Money extends CI_Controller{
    
    public function __construct()
    {
         parent::__construct();
          $this->load->model('moneym');
    }

    public function index(){
        $solde = 0;
        $user = $this->session->userdata('user');
        $user_solde = $this->moneym->get_user_solde($user['idUtilisateur']);
        if(count($user_solde)>0){
            $solde = $user_solde[0]['balance'];
        }
        $data['solde'] = $solde;
        $data['error'] = $this->input->get('error');
        $this->load->view('user/money/insert_code', $data);
    }

    public function insert_code(){
        $code = $this->input->post('code');
        $user = $this->session->userdata('user');
        $ocde_validity = $this->moneym->check_code($code);
        if(count( $ocde_validity)<1){
           redirect(("money/index?error=code invalide ou n'existe pas ou a été déja utilisée"));
        }
        $this->moneym->insert_code($ocde_validity[0]['idCode'],$ocde_validity[0]['montant'], $user['idUtilisateur']);
        redirect(base_url("money/"));
    }

}