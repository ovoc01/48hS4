<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('helper_pour_formater_un_nombre_en_monétaire_et_en_style_de_millier')){
    function helper_pour_formater_un_nombre_en_monétaire_et_en_style_de_millier($nombre){
        return number_format($nombre, 0, ',', ' ') . ' ' . 'Ar';
    }   
}

if( ! function_exists('checkLogIn')){
    function checkLogIn($username, $password){
        if($username == "fax" && $password == "nilo"){
            return true;
        }   return false;
    }
}