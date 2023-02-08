<?php

class historique_model extends CI_Model
{
    public function insert($idobjet, $idutilisateur, $date){
        return $this->db->insert('historique', array('idobjet'=>$idobjet, 'idutilisateur'=>$idutilisateur, 'date'=>$date));
    }
    public function insertnow($idobjet, $idutilisateur){
        $this->db->set('datedechange','NOW()',FALSE);
        $data = array('idobjet'=>$idobjet, 'idutilisateur'=>$idutilisateur);
        return $this->db->insert('historique', $data);
    }
}