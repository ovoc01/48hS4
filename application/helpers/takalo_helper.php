<?php

if( ! function_exists('checkLogIn')){
    function checkLogin($mail, $password){
        $query=$this->db->get_where('utilisateur',array('email' =>$mail, 'motdepasse' => $password));
        $result=$query->result();
        if(count($result)==1) return $result[0];
        return false;
    }

    function upload() {
        $file_count = count($_FILES['file']['name']);
        $img_string = "";
        for ($i = 0; $i < $file_count; $i++) {
            $filename = $_FILES['file']['name'][$i];
            if (in_array(strchr($filename, "."), array('.png', '.jpg', '.jpeg', '.PNG', '.JPG', '.JPEG'))) {
                move_uploaded_file($_FILES['file']['tmp_name'][$i], 'assets/images/'.$filename);
                $img_string .= $filename;

                if ($i < $file_count - 1) {
                    $img_string .= ",";
                }
            }
        }
    }
}