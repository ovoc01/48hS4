<?php if ( ! defined('BASEPATH')) exit('No direct script access allower');
class news_model extends CI_Model{
    public function get_info(){
        // On simule l'envoi d'une requête
        return array('auteur' => 'Chuck Norris',
                        'date' => '24/07/05',
                        'email' => 'email@ndd.fr');
    }
    public function get_customer($idcustomer){
        $query = $this->db->query('Select * from customer');
        $val = array();
        foreach($query->result_array() as $row){
            $val[] = $row;
        }
        if(count($val) <= 0) return false;
        return $val[0];
    }
}