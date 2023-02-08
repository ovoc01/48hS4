<?php

class echange_model extends CI_Model
{
    public function proposer($idobjet1, $idobjet2, $idutilisateur1, $idutilisateur2){
        $data = array('idobjet1'=>$idobjet1, 'idobjet2'=>$idobjet2, 'idutilisateur1'=>$idutilisateur1, 'idutilisateur2'=>$idutilisateur2);
        $this->db->set('date','NOW()',FALSE);
        return $this->db->insert('echange', $data);
    }

    // maka anze demande nalefa
    public function getDemande($idutilisateur2){
        $select = "select * from echange where idutilisateur2 = $idutilisateur2 and idechange not in (select idechange from statutechange)";
        $query = $this->db->query($select);
        return $query->result_array();
    }

    public function isInDemande($idutilisateur, $idobjet){
        $demandes = $this->getDemande($idutilisateur);
        foreach($demandes as $demande){
            if($demande['idobjet1']==$idobjet){
                return true;
            }
        }
        return false;
    }

    // maka anze proposition reçu
    public function getProposition($idutilisateur1){
        $select = "select * from echange where idutilisateur1 = $idutilisateur1 and idechange not in (select idechange from statutechange)";
        $query = $this->db->query($select);
        return $query->result_array();
    }

    public function isInProposition($idutilisateur, $idobjet){
        $propositions = $this->getProposition($idutilisateur);
        foreach($propositions as $proposition)
            if($proposition['idobjet2']==$idobjet)
                return true;
        return false;
    }

    public function getIdInProposition($idutilisateur, $idobjet){
        $propositions = $this->getProposition($idutilisateur);
        foreach($propositions as $proposition)
            if($proposition['idobjet2']==$idobjet)
                return $proposition;
        return null;
    }

    public function getEchange($idechange){
        $query = $this->db->get_where('echange',array('idechange' => $idechange));
        return $query->result_array();
    }

    public function echanger($echange){
        if(count($echange)>0){

            $this->load->model('objet_model');
            $this->load->model('historique_model');

            $takalo = $echange[0];
            $objet1 = $this->objet_model->getObjetById($takalo['idobjet1']);
            $objet2 = $this->objet_model->getObjetById($takalo['idobjet2']);

            $this->db->where('idobjet',$takalo['idobjet1']);
            $this->db->update('objet',array('idutilisateur'=>$takalo['idutilisateur2']));

            $this->historique_model->insertnow($takalo['idobjet1'], $takalo['idutilisateur2']);

            $this->db->where('idobjet',$takalo['idobjet2']);
            $this->db->update('objet', array('idutilisateur'=>$takalo['idutilisateur1']));

            $this->historique_model->insertnow($takalo['idobjet2'], $takalo['idutilisateur1']);
        }
        return false;
    }

    public function answer($idechange, $idetat){
        $echange = $this->getEchange($idechange);
        if(count($echange)>0){
            $this->load->model('objet_model');
            $takalo = $echange[0];
            if($idetat == 1){
                $this->echanger($echange);
            }
            $data = array('idechange'=>$idechange, 'idetat'=>$idetat);
            $this->db->set('date','NOW()',FALSE);
            $this->db->insert('statutechange',$data);
        }
    }

}