<!-- Mila importena ny header.php -->



<div class="amado_product_area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Modifier une categorie</h2>
                    </div>

                    <form action="#" method="post" id="modifcategory">
                        <input type="text" style="display: none" name="idcategory" value="<?=$categorie['idcategorie']?>">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="nomcategory" name="nomcategory" placeholder="Nom de categorie" value="<?=$categorie['nomcategorie']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart-btn col-lg-6">
                                <input type="submit" value="Modifier" name="submit" class="btn amado-btn w-100" onclick="modifcategorie()">
                            </div>
                            <div class="cart-btn col-lg-6">
                                <input type="submit" value="supprimer" name="submit" class="btn amado-btn w-100" onclick="deletecategorie()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

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