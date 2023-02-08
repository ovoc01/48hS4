<?php
    $active = "index";
    if(isset($service)) $active = $service;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Takalo | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/core-style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/style.css">

</head>

<body>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <select>
                            <option>categorie</option>
                        </select>
                        <button type="submit"><img src="<?=base_url()?>assets/img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="<?=base_url()?>/home"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="<?=base_url()?>home/service/index"><img src="<?=base_url()?>assets/img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search">
            <a href="#" class="search-nav"><img src="<?=base_url()?>assets/img/core-img/search.png" alt=""> Search</a>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li <?php if($active=="index") print("class=\"active\"");?>><a href="<?=base_url()?>home/service/index">Home</a></li>
                <li <?php if($active=="shop") print("class=\"active\"");?>><a href="<?=base_url()?>home/service/shop">Lister</a></li>
                <li <?php if($active=="propositions") print("class=\"active\"");?>><a href="<?=base_url()?>home/service/propositions">Propositions</a></li>
                <li <?php if($active=="cart") print("class=\"active\"");?>><a href="<?=base_url()?>home/service/cart">Cart</a></li>
                <li <?php if($active=="checkout") print("class=\"active\"");?>><a href="<?=base_url()?>home/service/checkout">Checkout</a></li>
                <?php if($_SESSION['utilisateur']['admin']){ ?>
                    <li <?php if($active=="categoriemgr") print("class=\"active\"");?>><a href="<?=base_url()?>home/manage/addcategory">Add category</a></li>
                    <li <?php if($active=="categoriemgr") print("class=\"active\"");?>><a href="<?=base_url()?>home/manage/modifycategory?idcategorie=1">Modify category</a></li>
                <?php } ?>

            </ul>
        </nav>
        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="<?=base_url()?>sign/logout" class="btn amado-btn mb-15">logout</a>

        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->