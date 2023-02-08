<!--Mila importena ny header.php -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <?php foreach($objets as $objet) { ?>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Categorie</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php foreach($objet['photo'] as $photo){ ?>
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?=base_url()?><?=$photo['path']?>);">
                                    </li>
                                    <?php } ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php foreach($objet['photo'] as $photo){ ?>
                                        <div class="carousel-item active">
                                            <a class="gallery_img" href="<?=base_url($photo['path'])?>">
                                                <img class="d-block w-100" src="<?=base_url($photo['path'])?>" alt="First slide">
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?=$objet['prixestimatif']?> Ar</p>
                                <a>
                                    <h6><?=$objet['titre']?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="short_overview my-5">
                                <p>
                                    <?=$objet['description']?>
                                </p>
                                <p class="text-decoration-underline">
                                    Objet de: <?=$objet['nomutilisateur']?>
                                </p>
                            </div>

                            <!-- Add to Cart Form -->
                            <?php if($_SESSION['utilisateur']['idutilisateur']!=$objet['idutilisateur'] and !$indemande and !$inproposition ){ ?>
                                <form class="cart clearfix" method="post" action="<?=base_url("/echange")?>">
                                    <div class="cart-btn d-flex mb-50">
                                        <input type="number" name="idobjet1" value="<?=$objet['idobjet']?>" style="display: none">
                                        <p>Vos objets</p>
                                        <select id="country" name="idobjet2">
                                            <?php foreach ($mine as $myobject){ ?>
                                                <option value="<?=$myobject['idobjet']?>"><?=$myobject['titre']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="btn amado-btn">Proposer l'échange</button>
                                </form>
                            <?php }elseif($indemande){ ?>
                                <p style="color: black">Vous avez déjà envoyé une proposition</p>
                            <?php }elseif($inproposition && isset($proposition)){?>
                                    Un utilisateur veut echanger cet objet avec le <a class="text-decoration-underline" href="<?=base_url("detail?idobjet=".$proposition['idobjet1'])?>"><h6>votre</h6></a>
                                    <form action="<?=base_url()?>echange/changestate" method="post">
                                        <div class="row">
                                            <input style="display: none" type="text" name="idechange" value="<?=$proposition['idechange']?>">
                                            <div class="cart-btn col-lg-6">
                                                <button type="submit" value="1" name="idetat" class="btn amado-btn w-100">Accepter</button>
                                            </div>
                                            <div class="cart-btn col-lg-6">
                                                <button type="submit" value="2" name="idetat" class="btn amado-btn w-100">Refuser</button>
                                            </div>
                                        </div>
                                    </form>
                            <?php }else echo "Voici un point de vu de votre objet" ?>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>



        </div>
        <!-- Product Details Area End -->
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