<!-- Mila importena ny header.php -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <?php
                    foreach ($objets as $objet){ ?>

                        <!-- Single Catagory -->
                        <div class="single-products-catagory clearfix">
                            <a href="<?=base_url()?>detail?idobjet=<?=$objet['idobjet']?>">
                                <?php if(count($objet['photo'])>0){ ?>
                                <img src="<?=base_url()?><?=$objet['photo'][0]['path']?>" alt="">
                                <?php } ?>
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <div class="line"></div>
                                    <p>Estimé à <?=$objet['prixestimatif']?></p>
                                    <h4><?=$objet['titre']?></h4>
                                </div>
                            </a>
                        </div>

                    <?php } ?>

            </div>
        </div>
        <!-- Product Catagories Area End -->
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