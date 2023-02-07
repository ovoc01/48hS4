<?php

$this->load->view("amado-master/header.php");
if (isset($service)) {
    $this->load->view("amado-master/categorie.php");
    $this->load->view("amado-master/admin/" . $service . ".php");
} else $this->load->view("amado-master/index.php");
$this->load->view("amado-master/footer.php");
