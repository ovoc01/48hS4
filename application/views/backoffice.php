<?php

$this->load->view("amado-master/header.php");
//$this->load->view("amado-master/categorie.php");
$this->load->view("amado-master/admin/sidebar.php");
$this->load->view("amado-master/admin/" . $service . ".php");
$this->load->view("amado-master/footer.php");
