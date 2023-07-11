<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Moneym extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

 public function insert_code($idCode, $montant, $idUtilisateur) {
    $this->db->trans_start(); // Start the transaction

    // Insert user_transaction
    $sql = "INSERT INTO user_transaction (idUtilisateur, montant, status, date) VALUES ('$idUtilisateur', $montant, 0, NOW())";
    $this->db->query($sql);

    // Update code status to 5
    $this->db->set('status', 5);
    $this->db->where('idCode', $idCode);
    $this->db->update('code');

    // Insert into code_history
    $data = array(
        'idUtilisateur' => $idUtilisateur,
        'idCode' => $idCode,
        'date' => date('Y-m-d')
    );
    $this->db->insert('code_history', $data);

    $this->db->trans_complete(); // Complete the transaction

    if ($this->db->trans_status() === FALSE) {
        echo "Error";
    }
}


    
    

    public function check_code($code){
        $sql = "select * from code where intitule = '".$code."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    


    //TODO
    public function check_code_valide($code){
        $sql = "select * from v_code_valide where code = '".$code."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_user_solde($idUtilisateur){
        $sql = "select * from v_user_balance where user_id = '".$idUtilisateur."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_code_use_liste(){
        $sql = "select * from v_code_usage_count";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}