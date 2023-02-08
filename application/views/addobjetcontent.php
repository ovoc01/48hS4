<!-- Mila importena ny header.php -->

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Ajouter objet</h2>
                    </div>

                    <form action="<?=base_url("/addobjet/add")?>" method="get" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" name="titre" placeholder="Titre" >
                            </div>
                            <div class="col-12 mb-3">
                                <input type="number" class="form-control" name="prixestimatif" placeholder="prix estimatif">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="w-100" id="country" name="idcategorie">
                                    <?php foreach ($categories as $category){ ?>
                                        <option value="<?=$category['idcategorie']?>"><?=$category['nomcategorie']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="description" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Description..."></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <input type="file" accept="image/*" name="files[]" multiple>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <button type="submit" name="add" class="btn amado-btn w-100">add</button>
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