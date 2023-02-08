<?php

class echange_model extends CI_Model
{
    public function proposer($idobjet1, $idobjet2, $idutilisateur1, $idutilisateur2){
        $data = array('idobjet1'=>$idobjet1, 'idobjet2'=>$idobjet2, 'date', 'idutilisateur1'=>$idutilisateur1, 'idutilisateur2'=>$idutilisateur2);
        $this->db->set('time','NOW()',FALSE);
        return $this->db->insert('echange', $data);
    }

    public function getDemande($idutilisateur2){
        $select = "select * from echange where idutilisateur2 = $idutilisateur2 and idechange not in (select * from statutechange)";
        $query = $this->db->query($select);
        return $query->result_array();
    }

    public function getProposition($idutilisateur1){
        $select = "select * from echange where idutilisateur1 = $idutilisateur1 and idechange not in (select * from statutechange)";
        $query = $this->db->query($select);
        return $query->result_array();
    }

    public function getEchange($idechange){
        $query = $this->db->get_where('echange',array('idechange' => $idechange));
        return $query->result_array();
    }

    public function answer($idechange, $idetat){
        $echange = $this->getEchange($idechange);
        if(count($echange)>0){
            $this->load->model('objet_model');
            $takalo = $echange[0];
            $objet1 = $this->objet_model->getObjetById($takalo['idobjet1']);
            $objet2 = $this->objet_model->getObjetById($takalo['idobjet2']);
            $this->db->where('idobjet',$takalo['idobjet1']);
            $this->db->update('objet',array('idutilisateur'=>$takalo['idutilisateur2']));
            $data = array('statutechange'=>$idechange, 'idetat'=>$idetat);
            $this->db->set('time','NOW()',FALSE);
            $this->db->insert('etatechange',$data);
        }
    }

    public function echanger($echange){
        if(count($echange)>0){

            $this->load->model('objet_model');

            $takalo = $echange[0];
            $objet1 = $this->objet_model->getObjetById($takalo['idobjet1']);
            $objet2 = $this->objet_model->getObjetById($takalo['idobjet2']);

            $this->db->where('idobjet',$takalo['idobjet1']);
            $this->db->update('objet',array('idutilisateur'=>$takalo['idutilisateur2']));



            $this->db->where('idobjet',$takalo['idobjet2']);
            $this->db->update('objet', array('idutilisateur'=>$takalo['idutilisateur1']));
        }

    }

}