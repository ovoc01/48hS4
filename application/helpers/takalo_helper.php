<?php

if( ! function_exists('checkLogIn')){
    function checkLogin($mail, $password){
        $query=$this->db->get_where('utilisateur',array('email' =>$mail, 'motdepasse' => $password));
        $result=$query->result();
        if(count($result)==1) return $result[0];
        return false;
    }
}
if(! function_exists('getpictures')){
    function getpictures($idobjet){
        $this->load->model('photo_model');

    }
}
if(! function_exists('upload')){
    function upload() {
        $file_count = count($_FILES['files']['name']);
        $img_string = "";
        for ($i = 0; $i < $file_count; $i++) {
            $filename = $_FILES['files']['name'][$i];
            if (in_array(strchr($filename, "."), array('.png', '.jpg', '.jpeg', '.PNG', '.JPG', '.JPEG'))) {
                move_uploaded_file($_FILES['file']['tmp_name'][$i], base_url('assets/img/'.$filename));
                $img_string .= $filename;
                echo base_url('assets/img/'.$filename);

                if ($i < $file_count - 1) {
                    $img_string .= ",";
                }
            }
        }
    }
}
