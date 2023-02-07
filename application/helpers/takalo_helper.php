<?php

if( ! function_exists('checkLogIn')){
    function checkLogin($mail, $password){
        $query=$this->db->get_where('utilisateur',array('email' =>$mail, 'motdepasse' => $password));
        $result=$query->result();
        if(count($result)==1) return $result[0];
        return false;
    }
}