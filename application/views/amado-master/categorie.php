
<div class="shop_sidebar_area">

    <?php if(isset($categories)) { ?>
    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Par categories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <?php foreach($categories as $category){ ?>
                <li><a href="#"><?=$category['nomcategorie']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php } ?>

    <?php if(isset($utilisateurs)){ ?>

    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Par utilisateur</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <?php foreach($utilisateurs as $utilisateur){ ?>
                    <li><a href="#"><?=$utilisateur['nom']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <?php } ?>


</div>
