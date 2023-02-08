<!-- Mila importena ny header.php -->

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Modifier objet</h2>
                    </div>

                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="Titre" value="<?=$objet['titre']?>">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="number" class="form-control" placeholder="prix estimatif" value="<?=$objet['prixestimatif']?>">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="w-100" id="country">
                                    <?php foreach ($categories as $category){ ?>
                                        <option value="<?=$category['idcategorie']?>" <?php if($category['idcategorie']==$objet['idcategorie']) echo "selected"; ?>><?=$category['nomcategorie']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Description..."><?=$objet['description']?></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="file" accept="image/*" name="file[]" multiple>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a href="#" class="btn amado-btn w-100">edit</a>
                        </div>
                    </form>
                </div>
            </div>
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