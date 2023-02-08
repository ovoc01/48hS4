<!-- Mila importena ny header.php-->


<div class="amado_product_area section-padding-100">
    <div class="container-fluid">



        <div class="row">

            <?php foreach($objets as $objet) { ?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">

                    <div class="single-product-wrapper">
                        <a href="<?=base_url()?>detail?idobjet=<?=$objet['idobjet']?>">
                        <!-- Product Image -->
                        <div class="product-img">
                            <?php if(count($objet['photo'])>0){ ?>
                                <img src="<?=base_url()?><?=$objet['photo'][0]['path']?>" alt="">
                            <?php } ?>
                            <!-- Hover Thumb -->
                            <?php if(count($objet['photo'])>1){ ?>
                                <img class="hover-img" src="<?=base_url()?><?=$objet['photo'][1]['path']?>" alt="">
                            <?php } ?>
                        </div>
                        </a>


                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?=$objet['prixestimatif']?></p>
                                <a href="product-details.php">
                                    <h6><?=$objet['titre']?></h6>
                                </a>
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href="<?=base_url()?>detail?idobjet=<?=$objet['idobjet']?>" data-toggle="tooltip" data-placement="left" title="Répondre à l'échange"><img src="<?=base_url()?>assets/img/core-img/cart.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->



<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="<?=base_url()?>assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?=base_url()?>assets/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?=base_url()?>assets/js/plugins.js"></script>
<!-- Active js -->
<script src="<?=base_url()?>assets/js/active.js"></script>

</body>

</html>
