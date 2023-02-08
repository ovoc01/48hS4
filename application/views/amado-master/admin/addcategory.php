<!-- Mila importena ny header.php -->

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Ajouter une categorie</h2>
                    </div>

                    <form action="#" method="post" id="addcategory">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="nomcategory" name="nomcategory" placeholder="Nom de categorie" value="">
                            </div>
                        </div>
                        <div class="cart-btn">
                            <input type="submit" value="Ajouter" name="submit" class="btn amado-btn w-100" onclick="addcategorie()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<script>
    <?php if(isset($_GET['error']) && $_GET['error']==0){ ?>
        alert("aucune categorie disponible !");
    <?php } ?>
</script>

<script type="text/javascript" src="<?=base_url()?>/assets/javascript/crud.js"></script>
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