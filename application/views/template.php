<?php
$this->load->view("amado-master/header.php");
if(isset($service)){
    if($service == "shop")
        $this->load->view("amado-master/categorie.php");
    $this->load->view("amado-master/".$service.".php");
}else $this->load->view("amado-master/index.php");
$this->load->view("amado-master/footer.php");

// $this->load->helper('mirindra');
// $this->load->view($contents);