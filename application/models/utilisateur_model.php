<?php
class utilisateur_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAllUser() {
        $query = $this->db->get('utilisateur');
        return $query->result_array();
    }

    protected function getUserId($mail, $mdp){
        $query=$this->db->get_where('utilisateur',array('email'=> $mail, 'motdepasse'=>$mdp));
        return $query->result_array();
    }

    public function isAdmin($user_id){
        $query=$this->db->get_where('utilisateur',array('idutilisateur'=>$user_id));
        $result=$query->result();
        if(count($result)>0){
            $user = $result[0];
            if($user->admin==1) return true;
        }
        return false;
    }

    public function checkLogin($mail, $pwd){
        $result = $this->getUserId($mail, $pwd);
        if(count($result)==1) return $result[0];
        return false;
    }

    public function save($nom, $prenom, $mail, $mdp, $admin = 'default')
    {
        $data=array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$mail,
            'motdepasse'=>$mdp,
            'admin'=>$admin
        );

        return $this->db->insert('utilisateur',$data);
    }
}
?>