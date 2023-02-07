<?php
$active = "index";
if(isset($service)) $active = $service;
?>

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <p> Rodolphe - Fenitra - Misa<br>
                            ETU001999 - ETU002663 - ETU002031
                        </p>
                        <p></p>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item <?php if($active=="index") print("active");?>">
                                        <a class="nav-link" href="<?=base_url()?>/home">Home</a>
                                    </li>
                                    <li class="nav-item <?php if($active=="shop") print("active");?>">
                                        <a class="nav-link" href="<?=base_url()?>home/service/shop">Shop</a>
                                    </li>
                                    <li class="nav-item <?php if($active=="product-details") print("active");?>">
                                        <a class="nav-link" href="<?=base_url()?>home/service/product-details">Product</a>
                                    </li>
                                    <li class="nav-item <?php if($active=="cart") print("active");?>">
                                        <a class="nav-link" href="<?=base_url()?>home/service/cart">Cart</a>
                                    </li>
                                    <li class="nav-item <?php if($active=="checkout") print("active");?>">
                                        <a class="nav-link" href="<?=base_url()?>home/service/checkout">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->