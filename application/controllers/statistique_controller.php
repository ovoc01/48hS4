<?php

class statistique_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function is_Admin($user_id){
        $query=$this->db->get_where('User',array('idUser'=>$user_id));
        $result=$query->result();
        if(count($result)>0){
            $user=$result[0];
            if($user->admin==1){
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function statusers(){
        if(!$this->is_Admin($this->session->userdata('mail'))){
            return false;
        }
        return $this->db->count_all('user');
    }

    public function getstatechange(){
        if(!this->is_Admin(thid->session->userdata('mail'))){
            return false;
        }
        return $this->db->count_all('echange');
    }
}