<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Moneym extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

   //creae a function to insert transaction and have as parameter the user id and th code id an it will insert the value of the code in the transaction table and there is status column in the table 0 corresponding to the money entered and 1 corresponding to the money out and there is a date column in the table
 public function insert_code($idCode, $montant, $idUtilisateur) {
    $this->db->trans_start(); // Start the transaction

    // Insert user_transaction
    $sql = "INSERT INTO user_transaction (idUtilisateur, montant, status, date) VALUES ('$idUtilisateur', $montant, 0, NOW())";
    $this->db->query($sql);

    // Update code status to 5
    $this->db->set('status', 5);
    $this->db->where('idCode', $idCode);
    $this->db->update('code');

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
}